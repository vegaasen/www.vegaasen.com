# AGENTS.md - Agentic Coding Guidelines for www.vegaasen.com

## Project Overview

This is a simple static personal portfolio website built with:
- **Tailwind CSS v4** - Styling framework
- **Plain HTML** - Markup
- **Bun + TypeScript scripts** - Build automation

## Build Commands

```bash
# Development - watches CSS and starts Vite dev server
bun run dev

# Production build - creates minified output in ./build/
bun run build
```

The build process:
1. Compiles Tailwind CSS from `src/index.css` to `src/v.min.css` (minified)
2. Minifies HTML (`src/index.html` -> `src/index.min.html`) via `scripts/html-minify.ts`
3. Removes old `./build/` and recreates it
4. Moves minified HTML to `./build/index.html`
5. Optimizes and copies images via `scripts/image-optimize.ts`
6. Copies `src/sitemap.xml`, `src/robots.txt`, and `src/site.webmanifest` to `./build/`

The `dev` command runs `tailwindcss --watch` and `vite` concurrently, serving the site locally with hot reload.

**No tests or linting are configured** for this simple static site.

## Running a Single Test

Since this is a static site with no test framework, there are no tests to run.
If tests were added in the future, they would likely use a simple runner.
For now, manual testing via browser is sufficient.

## Code Style Guidelines

### General Principles

- Keep it simple - this is a static site, not a complex application
- Use semantic HTML5 elements
- Follow Tailwind CSS conventions
- Maintain accessibility (ARIA labels, alt text, etc.)
- Prefer explicit over implicit
- Avoid over-engineering solutions

### HTML

- Use lowercase tags and attributes
- Use double quotes for all attribute values
- Include `lang` attribute on `<html>` element
- Include meta viewport for responsiveness
- Use semantic elements: `<header>`, `<section>`, `<footer>`, `<main>`, `<nav>`, `<h1>`-`<h6>`
- Include `rel="noopener noreferrer"` or `rel="nofollow noopener"` on all external links
- Indent with 2 spaces
- Place attributes on their own lines for elements with many attributes
- Order attributes: class, id, src/href, alt, aria-*, other attributes

### CSS (Tailwind)

- Use Tailwind utility classes as the primary styling method
- Custom styles go in `src/index.css` only
- Use `@layer base` for base/reset styles
- Use `@layer components` for custom component styles
- Use `@layer utilities` for custom utility classes
- Use CSS custom properties (`:root`) for theme variables and repeated values
- Follow Tailwind v4 conventions (use `@import 'tailwindcss'` not `@tailwind` directives)
- Use nesting with `&` parent selector for pseudo-classes and modifiers
- Define custom animations using `@keyframes`

### TypeScript / JavaScript (Build Scripts)

- Use ES modules (`"type": "module"` in package.json)
- Scripts are TypeScript (`.ts`) run directly via `bun run`
- Use async/await for all file operations
- Use `node:fs/promises` for file system operations (not sync methods)
- Use `import` statements at the top of files
- Keep scripts minimal - only for build automation
- Always use try/catch for operations that can fail (file I/O)
- Log errors with `console.log()` or `console.error()`
- Use meaningful variable names
- Use camelCase for function and variable names
- Use PascalCase for class-like constructs
- Use uppercase with underscores for constants
- Prefer `const` over `let`, avoid `var`
- Use template literals (`` `string ${variable}` ``) over concatenation
- Always use strict equality (`===` and `!==`) over loose equality

### Error Handling

- Wrap file I/O operations in try/catch blocks
- Log errors to console for debugging
- Handle missing files gracefully - don't crash the build
- Provide meaningful error messages that explain what went wrong

### Naming Conventions

- Files: kebab-case (e.g., `html-minify.ts`)
- CSS classes: kebab-case (e.g., `.wave-animation`)
- JavaScript variables/functions: camelCase (e.g., `minifyHtml`)
- Constants: UPPER_SNAKE_CASE (e.g., `MAX_RETRIES`)
- HTML ids: kebab-case (e.g., `main-content`)

### File Organization

```
/src
  index.html        # Main HTML file
  index.css         # Tailwind source + custom styles
  v.min.css         # Generated CSS (intermediate, not committed)
  sitemap.xml       # Site map (copied to build/)
  robots.txt        # Robots directives (copied to build/)
  site.webmanifest  # Web app manifest (copied to build/)
  /i                # Images and assets (photos, logos, SVGs)
/scripts
  html-minify.ts    # HTML minification build script
  image-optimize.ts # Image optimization build script
/infra              # Infrastructure config (e.g. AWS)
/.github
  /workflows
    build.yml               # CI/CD: builds and deploys to S3 on push to master
    infra.yml               # Infrastructure workflow
    merge-auto-dependabot.yml
/build              # Generated output (do not edit manually)
tailwind.config.js  # Custom screen breakpoints
postcss.config.js   # PostCSS config with @tailwindcss/postcss plugin
vite.config.js      # Vite dev server config
package.json
bun.lock            # Bun lockfile
```

### Image Assets

- Store all images in `src/i/` directory
- Use WebP format for photos when possible
- Use SVG format for logos and icons
- Optimize images before adding (use tools like Squoosh)
- Keep file sizes minimal for faster page loads

## Accessibility Guidelines

- Always include descriptive `alt` text for images
- Use `alt=""` for decorative images that convey no meaning
- Use `aria-description` for decorative/illustrative images
- Use `aria-label` on interactive elements without visible text
- Ensure sufficient color contrast (WCAG AA minimum)
- Use semantic heading hierarchy (h1 -> h2 -> h3, never skip levels)
- Make all interactive elements keyboard accessible
- Use `role` attribute only when necessary (prefer semantic HTML)
- Include `focus` styles for keyboard navigation

## Git Workflow

- Commit messages should be concise and descriptive
- Use imperative mood ("Add feature" not "Added feature")
- Start with a verb: Add, Fix, Update, Remove, Refactor
- Reference issue numbers if applicable
- No need for complex branching - linear history is fine
- Build folder is generated and typically not committed
- Consider what files need to be committed vs ignored

## Browser Support

- Target modern browsers (last 2 versions of Chrome, Firefox, Safari, Edge)
- Use standard CSS features that have broad support
- Test in multiple browsers before deploying
- Consider progressive enhancement for advanced features

## Deployment

- The site is hosted on Amazon S3 (`eu-north-1` region)
- Deployment is automated via GitHub Actions on push to `master`
- The workflow (`.github/workflows/build.yml`) runs `bun run build` and syncs `./build/` to S3
- AWS credentials are stored as GitHub Actions secrets (`AWS_S3_BUCKET`, `AWS_ACCESS_KEY_ID`, `AWS_SECRET_ACCESS_KEY`)
- For manual deployment: run `bun run build` and upload `./build/` contents to S3
- Set appropriate cache headers for assets

## Important Notes

- This is a static site - no runtime dependencies or backend
- Images are stored in `src/i/`
- The build output in `./build/` is what gets deployed
- Version history is tracked in README.md
- Keep the site lightweight and fast-loading
