<script lang='ts'>
  import Header from './components/Header.svelte'
  import Footer from './components/Footer.svelte'
  import Pictures from './sections/main/Pictures.svelte'
  import AboutMe from './sections/main/AboutMe.svelte'
  import OverviewSection from './components/OverviewSection.svelte'
  import type { DetailedOverview, Overview } from './types/Overview'
  import DetailedSplitSection from './components/DetailedSplitSection.svelte'

  const technologies: Overview[] = [
    { caption: 'ab', link: '' },
    { caption: 'ab', link: '' },
    { caption: 'ab', link: '' },
    { caption: 'ab', link: '' },
    { caption: 'ab', link: '' },
    { caption: 'ab', link: '' },
  ]
  const latestAdventures: DetailedOverview[] = [
    { image: {url: '', caption: ''}, title: '1', content: '11' },
    { image: {url: '', caption: ''}, title: '1', content: '11' },
    { image: {url: '', caption: ''}, title: '1', content: '11' },
    { image: {url: '', caption: ''}, title: '1', content: '11' },
    { image: {url: '', caption: ''}, title: '1', content: '11' },
  ]
</script>

<style>

</style>

<main>
  <Header />
  <Pictures />
  <AboutMe />
  <OverviewSection title='Technologies' entries={technologies} />
  <DetailedSplitSection title='Latest adventures' entries={latestAdventures} />
  <Footer />
</main>
