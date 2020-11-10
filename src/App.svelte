<style>
  :global(:root) {
    --highlight-color: cornflowerblue;
  }

  main {
    text-align: center;
    padding: 1em;
    max-width: 240px;
    margin: 0 auto;
  }

  h1 {
    color: #ff3e00;
    text-transform: uppercase;
    font-size: 4em;
    font-weight: 100;
  }

  @media (min-width: 640px) {
    main {
      max-width: none;
    }
  }

  @media (max-width: 960px) {
    main {
      max-width: 100%;
    }
  }
</style>

<script lang="ts">
  import Splash from './sections/Splash.svelte'
  import Navigation from './components/common/Navigation.svelte'
  import Developer from './sections/Developer.svelte'

  export let name: string
</script>

<main>
  <Navigation />
  <main>
    <Splash />
  </main>
  <Developer />
  <p>pages in the works - within the next week (..or so..), everything might be all done and jolly well 🤩✨!</p>
</main>
