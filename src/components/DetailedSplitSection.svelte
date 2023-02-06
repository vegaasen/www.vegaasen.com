<script lang='ts'>

  import type { DetailedOverview } from '../types/Overview'

  export let title
  export let entries: DetailedOverview[]
</script>

<style>

    h3::before {
        content: "";
        position: absolute;
        display: block;
        background: #000;
        top: 0.15em;
        left: 0;
        width: 0.8em;
        height: 0.8em;
        border-radius: 100%;
    }

    .entry {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 50%);
        grid-gap: 5px;
    }

    .image {
        padding-right: 10%;
    }

    img {
        max-width: 100%;
    }

</style>

<section>
  <h2>{title}</h2>
  {#each entries as entry}
    <div class='entry'>
      <div class='image'>
        <figure>
          <img src={entry.image.url} alt={entry.image.caption}>
        </figure>
      </div>
      <div class='content'>
        <h3>{entry.title}</h3>
        <div>
          <svelte:component this={entry.content} />
        </div>
      </div>
    </div>
  {/each}
</section>