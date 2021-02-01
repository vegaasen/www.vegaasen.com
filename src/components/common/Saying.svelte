<style>
  .saying {
    max-height: 70vh;
    min-height: 350px;
    background-color: rgb(247 247 247);
    text-align: left;
    position: relative;
  }

  .saying-container {
    max-width: 1000px;
    margin: 0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

  figure {
    font-size: 1.5em;
    position: relative;
    width: 100%;
    text-align: left;
  }

  blockquote {
    letter-spacing: -0.07em;
    font-size: 4em;
    margin: 0;
  }

  figcaption {
    text-align: right;
  }

  @media (max-width: 960px) {
    .saying {
      height: auto;
      min-height: auto;
      padding: 50px 0;
    }

    figure {
      top: 0;
      width: auto;
    }

    blockquote {
      letter-spacing: -0.02em;
      font-size: 2em;
      word-break: break-all;
    }

    figcaption {
      word-break: break-word;
    }
  }
</style>

<script lang="ts">
  export let quote: string
  export let by: string
  export let cite: string
</script>

<section class="saying">
  <section class="saying-container centered">
    <figure>
      <blockquote>{quote}</blockquote>
      {#if by}
        <figcaption>-{by}, <cite>{cite}</cite></figcaption>
      {/if}
    </figure>
  </section>
</section>
