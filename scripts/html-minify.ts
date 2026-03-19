import minifyHtml from '@minify-html/node'
import { readFile, writeFile } from 'node:fs/promises'

const { minify } = minifyHtml

const DEFAULT_BASE_FOLDER = 'src'

try {
  const indexHtml = await readFile(`${DEFAULT_BASE_FOLDER}/index.html`)
  const minified: Uint8Array = minify(indexHtml, {
    keep_closing_tags: true,
    minify_css: true,
    minify_js: true,
  })
  await writeFile(`${DEFAULT_BASE_FOLDER}/index.min.html`, minified)
} catch (err) {
  console.error('HTML minification failed:', err)
}
