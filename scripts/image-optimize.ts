import sharp from 'sharp'
import { optimize } from 'svgo'
import { readdir, readFile, writeFile, mkdir } from 'node:fs/promises'
import { existsSync } from 'node:fs'
import { extname, join } from 'node:path'

const SRC_DIR = 'src/i'
const OUT_DIR = 'build/i'

const SHARP_OPTIONS = {
  webp: { quality: 80 },
  webpMaxWidth: 1200,
  png: { compressionLevel: 9, effort: 10 },
} as const

interface ImageStats {
  original: number
  output: number
  saved: number
  pct: string
}

const formatBytes = (bytes: number): string => {
  if (bytes < 1024) return `${bytes} B`
  return `${(bytes / 1024).toFixed(1)} KB`
}

const optimizeImage = async (srcPath: string, outPath: string, ext: '.webp' | '.png'): Promise<ImageStats> => {
  const original = await readFile(srcPath)
  let output: Buffer

  if (ext === '.webp') {
    output = await sharp(original)
      .resize({ width: SHARP_OPTIONS.webpMaxWidth, withoutEnlargement: true })
      .webp(SHARP_OPTIONS.webp)
      .toBuffer()
  } else {
    output = await sharp(original).png(SHARP_OPTIONS.png).toBuffer()
  }

  await writeFile(outPath, output)

  const saved = original.length - output.length
  const pct = ((saved / original.length) * 100).toFixed(1)
  return { original: original.length, output: output.length, saved, pct }
}

const optimizeSvg = async (srcPath: string, outPath: string): Promise<ImageStats> => {
  const original = await readFile(srcPath, { encoding: 'utf8' })
  const result = optimize(original, { multipass: true })
  await writeFile(outPath, result.data, { encoding: 'utf8' })

  const saved = Buffer.byteLength(original) - Buffer.byteLength(result.data)
  const pct = ((saved / Buffer.byteLength(original)) * 100).toFixed(1)
  return {
    original: Buffer.byteLength(original),
    output: Buffer.byteLength(result.data),
    saved,
    pct,
  }
}

try {
  if (!existsSync(OUT_DIR)) {
    await mkdir(OUT_DIR, { recursive: true })
  }

  const files = await readdir(SRC_DIR)
  let totalOriginal = 0
  let totalOutput = 0

  for (const file of files) {
    const ext = extname(file).toLowerCase()
    const srcPath = join(SRC_DIR, file)
    const outPath = join(OUT_DIR, file)

    let stats: ImageStats

    if (ext === '.webp' || ext === '.png') {
      stats = await optimizeImage(srcPath, outPath, ext as '.webp' | '.png')
    } else if (ext === '.svg') {
      stats = await optimizeSvg(srcPath, outPath)
    } else {
      const raw = await readFile(srcPath)
      await writeFile(outPath, raw)
      console.log(`  [copy]  ${file}`)
      continue
    }

    totalOriginal += stats.original
    totalOutput += stats.output

    const sign = stats.saved >= 0 ? '-' : '+'
    console.log(
      `  [opt]   ${file.padEnd(30)} ${formatBytes(stats.original).padStart(9)} → ${formatBytes(stats.output).padStart(9)}  (${sign}${Math.abs(Number(stats.pct))}%)`
    )
  }

  const totalSaved = totalOriginal - totalOutput
  const totalPct = ((totalSaved / totalOriginal) * 100).toFixed(1)
  console.log(
    `\n  Total: ${formatBytes(totalOriginal)} → ${formatBytes(totalOutput)} (saved ${formatBytes(totalSaved)}, ${totalPct}%)`
  )
} catch (err) {
  console.error('Image optimization failed:', err)
  process.exit(1)
}
