import minifyHtml from '@minify-html/node'
const { minify } = minifyHtml
import { readFile, writeFile } from 'node:fs/promises'

const defaultBaseFolder = 'src/'

try {
  const indexHtml = await readFile(`${defaultBaseFolder}/index.html`)
  const minified = minify(indexHtml, {
    keep_closing_tags: true,
    minify_css: true,
    minify_js: true,
  })
  await writeFile(`${defaultBaseFolder}/index.min.html`, minified)
} catch (err) {
  console.error('HTML minification failed:', err)
}
