<script lang='ts'>
  import type { Picture } from '../../types/Picture'

  const pictures: Picture[] = [
    { url: 'images/bench.jpg', caption: 'På benken' },
    { url: 'images/ringstiden.jpg', caption: 'Ringstinden' },
    { url: 'images/ringstiden.jpg', caption: 'Ringstinden' },
    { url: 'images/ringstiden.jpg', caption: 'Ringstinden' },
    { url: 'images/ringstiden.jpg', caption: 'Ringstinden' },
  ]

  let markedIndex = -1
</script>

<style>

    section {
        min-height: 75vh;
        font-size: 1.45vw;
    }

    .pictures {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, auto);
        grid-gap: 10px;
        grid-row-gap: 20px;
    }

    .picture {
        position: relative;
    }

    .caption {
        position: absolute;
        top:0;
        background-color: #ffffff;
        width: 100%;
        height: 100%;
        z-index: 10;
    }

    .hidden img {
        z-index: 9;
    }

    img {
        position: relative;
        max-width: 100%;
        z-index: 11;
    }

    .more {
        padding-top: 2em;
        text-align: center;
        width: 100%;
    }

    .more button {
        cursor: pointer;
        font: inherit;
        text-align: inherit;
        border: none;
        border-radius: 0;
        overflow: visible;
        -webkit-appearance: none;
        text-decoration: none;
        background: linear-gradient(to top, #000 0.1em, rgba(0, 0, 0, 0) 0.1em) 0 0;
        color: #000;
    }

    .more button:hover {
        background: none;
    }

    .more button::after {
        position: relative;
        top: 0.1em;
        font-size: inherit;
        content: " ↴";
    }

</style>

<section>
  <div class='pictures'>
    {#each pictures as picture, index}
      <div class='picture' on:mouseenter={() => markedIndex = index} on:mouseleave={() => markedIndex = -1}>
        <div class={markedIndex === index ? 'image hidden ' : 'image'}>
          <img src={picture.url} alt={picture.caption} loading='lazy' />
        </div>
        <div class='caption'>
          {picture.caption}
        </div>
      </div>
    {/each}
  </div>
  <div class='more'>
    <button type="button" aria-label="Show me more of you!"><span tabindex="-1">Show me more</span></button>
  </div>
</section>