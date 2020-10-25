<script lang="ts">
  export let name: string;
</script>

<style>
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
</style>

<main>
    <h1>Hello {name}!</h1>
    <p>the amazing site for vegard aasen is currently in ze works</p>
    <p>you're in luck, though - as within the next week, there might just be one 🤩✨!</p>
</main>