<style>
  .banner {
    max-width: 700px;
    margin: 0 auto;
    padding: 200px 0;
  }

  .dark-background {
    background-color: #292929;
    color: #fff;
  }

  .dark-background a {
    color: #fff;
  }

  .banner h3 {
    font-size: 4em;
    text-transform: uppercase;
  }

  @media (max-width: 960px) {
    .banner h3 {
      font-size: 3em;
    }
  }
</style>

<script>
  import Emoji from '../components/misc/Emoji.svelte'
</script>

<article class="centered">
  <section class="banner">
    <h3>
      <a href="mailto:vegard.aasen@webstep.no?subject=Arbeide sammen?">
        arbe<Emoji reference="i">👋</Emoji>de
        <br />
        saman
      </a>
    </h3>
  </section>
</article>
