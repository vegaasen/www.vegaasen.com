import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'
import * as child from "child_process";

const git = {
  shortAbbrv: child.execSync('git rev-parse --short HEAD').toString().replace('\n', ''),
}

export default defineConfig({
  define: {
    COMMIT_HASH: JSON.stringify(git.shortAbbrv),
  },
  build: {
    outDir: 'build',
  },
  server: {
    open: '/',
  },
  plugins: [
    svelte(),
  ],
})
