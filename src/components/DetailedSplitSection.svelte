<script lang='ts'>

  import type { DetailedOverview } from '../types/Overview'

  export let title
  export let entries: DetailedOverview[]
</script>

<style>

    .entry {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 50%);
        grid-gap: 5px;
    }

</style>

<section>
  <h2>{title}</h2>
  {#each entries as entry}
    <div class='entry'>
      <div class='image'>
        <img src={entry.image.url} alt={entry.image.caption}>
      </div>
      <div class='content'>
        <h3>{entry.title}</h3>
        <div>
          {entry.content}
        </div>
      </div>
    </div>
  {/each}
</section>