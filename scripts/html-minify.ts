import minifyHtml from '@minify-html/node'
import { readFile, writeFile } from 'node:fs/promises'

const { minify } = minifyHtml

const DEFAULT_BASE_FOLDER = 'src'
const CSS_LINK_TAG = '<link href="./v.min.css" rel="stylesheet">'

try {
  const [indexHtml, css] = await Promise.all([
    readFile(`${DEFAULT_BASE_FOLDER}/index.html`, 'utf-8'),
    readFile(`${DEFAULT_BASE_FOLDER}/v.min.css`, 'utf-8'),
  ])
  const htmlWithInlinedCss = indexHtml.replace(CSS_LINK_TAG, `<style>${css}</style>`)
  const minified: Uint8Array = minify(Buffer.from(htmlWithInlinedCss), {
    keep_closing_tags: true,
    minify_css: true,
    minify_js: true,
  })
  await writeFile(`${DEFAULT_BASE_FOLDER}/index.min.html`, minified)
} catch (err) {
  console.error('HTML minification failed:', err)
}
