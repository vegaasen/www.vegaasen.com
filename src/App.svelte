<style>
  :global(:root) {
    --highlight-color: cornflowerblue;
  }

  main {
    text-align: center;
    padding: 0 1em;
    max-width: 240px;
    margin: 0 auto;
  }

  @media (min-width: 640px) {
    main {
      max-width: none;
    }
  }

  @media (max-width: 960px) {
    main {
      max-width: 100%;
      padding: 1em;
      margin: 0;
    }
  }
</style>

<script lang="ts">
  import Splash from './sections/Splash.svelte'
  import Navigation from './components/common/Navigation.svelte'
  import MeetMe from './sections/MeetMe.svelte'
  import Footer from './sections/Footer.svelte'
  import WorkTogether from './sections/WorkTogether.svelte'
  import About from './sections/About.svelte'
  import Saying from './components/common/Saying.svelte'
  import Parallax from './components/common/Parallax.svelte'
  import Developer from './sections/Developer.svelte'
</script>

<main>
  <Navigation />
  <main>
    <Splash />
  </main>
  <About />
  <Developer />
  <Saying by="Master Yoda" quote="Do or do not. There is no try." cite="Star Wars Episode V" />
  <MeetMe />
  <WorkTogether />
  <Parallax />
  <Footer />
</main>
