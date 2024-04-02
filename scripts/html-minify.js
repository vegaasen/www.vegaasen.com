import { minify } from 'html-minifier'
import { readFile, writeFile } from 'node:fs/promises'

const defaultBaseFolder = 'src/'

try {
  const indexHtml = await readFile(`${defaultBaseFolder}/index.html`, { encoding: 'utf8' })
  const minifiedContent = minify(indexHtml, {
    removeAttributeQuotes: true,
    removeComments: true,
    collapseWhitespace: true,
  })
  await writeFile(`${defaultBaseFolder}/index.min.html`, minifiedContent)
} catch (err) {
  console.log(err)
}
