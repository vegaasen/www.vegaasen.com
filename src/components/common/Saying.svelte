<style>
  .saying {
    height: 50vh;
    min-height: 450px;
    background-color: rgb(232 230 230);
    text-align: left;
  }

  .saying .saying-container {
    max-width: 1000px;
  }

  figure {
    top: 70px;
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
</style>

<script lang="ts">
  export let label: string
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
