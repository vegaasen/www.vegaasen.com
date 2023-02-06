<script lang="ts">
  import OverviewSection from '../../components/OverviewSection.svelte'
  import type { Overview } from '../../types/Overview.js'
  const technologies: Overview[] = [
    { caption: 'nginx', link: '' },
    { caption: 'cypress', link: '' },
    { caption: 'docker', link: '' },
    { caption: 'git', link: '' },
    { caption: 'grafana', link: '' },
    { caption: 'kibana', link: '' },
    { caption: 'nodejs', link: '' },
    { caption: 'deno', link: '' },
    { caption: 'javascript', link: '' },
    { caption: 'ktor', link: '' },
    { caption: 'typescript', link: '' },
    { caption: 'jenkins', link: '' },
    { caption: 'jest', link: '' },
    { caption: 'mocha', link: '' },
    { caption: 'kubernetes', link: '' },
    { caption: 'golang', link: '' },
    { caption: 'android', link: '' },
    { caption: 'nextjs', link: '' },
    { caption: 'kotlin', link: '' },
    { caption: 'python', link: '' },
    { caption: 'spring', link: '' },
    { caption: 'linux', link: '' },
    { caption: 'react', link: '' },
    { caption: 'micronaut', link: '' },
    { caption: 'postgresql', link: '' },
    { caption: 'oracledb', link: '' },
    { caption: 'express', link: '' },
    { caption: 'bash', link: '' },
    { caption: 'redis', link: '' },
    { caption: 'aws', link: '' },
    { caption: 'svelte', link: '' },
    { caption: 'vite', link: '' },
    { caption: 'turbopack', link: '' },
    { caption: 'storybook', link: '' },
    { caption: 'txdx', link: '' },
    { caption: 'angular', link: '' },
    { caption: 'arrow', link: '' },
    { caption: 'sqlserver', link: '' },
    { caption: 'graphql', link: '' },
    { caption: 'apache-httpd', link: '' },

  ]
</script>

<section>
  <OverviewSection title='Technologies' entries={technologies} />
</section>