import { readFile, writeFile } from 'node:fs/promises'

const SITEMAP_PATH = 'src/sitemap.xml'

try {
  const sitemap = await readFile(SITEMAP_PATH, 'utf-8')
  const today = new Date().toISOString().slice(0, 10)
  const stamped = sitemap.replace(/<lastmod>.*<\/lastmod>/, `<lastmod>${today}</lastmod>`)
  await writeFile(SITEMAP_PATH, stamped)
} catch (err) {
  console.error('Sitemap stamping failed:', err)
}
