# AGENTS.md - Agentic Coding Guidelines for www.vegaasen.com

## Project Overview

This is a simple static personal portfolio website built with:
- **Tailwind CSS v4** - Styling framework
- **Plain HTML** - Markup
- **Node.js scripts** - Build automation

## Build Commands

```bash
# Development - watches CSS for changes
npm run dev

# Production build - creates minified output in ./build/
npm run build
```

The build process:
1. Compiles Tailwind CSS from `src/index.css` to `src/v.min.css`
2. Minifies HTML (`src/index.html` -> `src/index.min.html`)
3. Copies assets to `./build/` folder

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

### JavaScript (Build Scripts)

- Use ES modules (`"type": "module"` in package.json)
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

- Files: kebab-case (e.g., `html-minify.js`)
- CSS classes: kebab-case (e.g., `.wave-animation`)
- JavaScript variables/functions: camelCase (e.g., `minifyHtml`)
- Constants: UPPER_SNAKE_CASE (e.g., `DEFAULT_BASE_FOLDER`)
- HTML ids: kebab-case (e.g., `main-content`)

### File Organization

```
/src
  index.html      # Main HTML file
  index.css       # Tailwind source + custom styles
  /i              # Images and assets (photos, logos, SVGs)
/scripts
  *.js            # Build scripts
/build            # Generated output (do not edit manually)
/tailwind.config.js
package.json
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

- The site is hosted on Amazon S3
- Run `npm run build` before deployment
- Upload contents of `./build/` folder to S3
- Configure S3 for static website hosting
- Set appropriate cache headers for assets

## Important Notes

- This is a static site - no runtime dependencies or backend
- Images are stored in `src/i/`
- The build output in `./build/` is what gets deployed
- Version history is tracked in README.md
- No CI/CD is currently configured - manual deployment
- Keep the site lightweight and fast-loading
