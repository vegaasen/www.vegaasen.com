<script lang='ts'>
  import type { Overview } from '../types/Overview'

  export let title: string
  export let entries: Overview[]
</script>

<style>

    .entries {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, auto);
        grid-gap: 5px;
    }

    a {
        color: #000000;
        text-decoration: none;
    }

    a:hover {
        background-image: linear-gradient(to top, #000000 0.1em, rgba(0, 0, 0, 0) 0.1em);
    }
</style>

<section>
  <h2>{title}</h2>
  <div class='entries'>
    {#each entries as entry}
      <div class='entry'>
        {#if (entry?.link ?? '') !== ''}
          <a href={entry.link}>{entry.caption}</a>
        {:else}
          <span>{entry.caption}</span>
        {/if}
      </div>
    {/each}
  </div>
</section>