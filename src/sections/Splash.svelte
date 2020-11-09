<style>
  .splash {
    position: relative;
    min-height: calc(100vh - 200px);
    flex-direction: column;
    justify-content: center;
    padding: 50px 40px 0;
  }

  .splash h1 {
    position: relative;
    font-weight: 800;
    color: #1d2021;
    line-height: 1.1;
    letter-spacing: -0.02em;
    z-index: 100;
    font-size: 5.882rem;
  }

  .ws-logo {
    width: 300px;
    filter: invert(100%);
  }

  .black {
    background-color: black;
  }

  @media (max-width: 960px) {
    .splash {
      padding: 10px 10px;
    }
    .splash h1 {
      font-weight: 700;
      line-height: 1.1;
      font-size: 2.941rem;
    }
    .ws-logo {
      margin-top: 10px;
      width: 200px;
    }
  }
</style>

<script>
  import Link from '../components/common/Link.svelte'
  import Container from '../components/common/Container.svelte'
</script>

<section class="splash">
  <Container size="medium">
    <header>
      <h1>
        Laoen, say hello to a Norwegian frontend enthusiast, backend lover and cleanness advocate working at
        <span class="black">
          <Link linkProps="{{ href: 'https://www.webstep.no', external: true }}"><img class="ws-logo" src="/images/webstep.png" alt="webstep logo" /></Link>
        </span>
        creating awesome things
      </h1>
    </header>
  </Container>
</section>
