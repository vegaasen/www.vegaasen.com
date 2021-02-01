<style>
  .splash {
    position: relative;
    min-height: 100vh;
    flex-direction: column;
    justify-content: center;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .splash h1 {
    position: relative;
    font-weight: 800;
    color: #1d2021;
    line-height: 1.1;
    letter-spacing: -0.02em;
    z-index: 100;
    font-size: 5.882rem;
    margin-top: 0;
  }

  h1 .highlight {
    color: var(--highlight-color);
  }

  .ws-logo {
    width: 300px;
    filter: invert(100%);
  }

  .black {
    background-color: black;
    padding-top: 6px;
  }

  @media (max-width: 900px) {
    .splash h1 {
      font-weight: 700;
      line-height: 1.1;
      font-size: 5rem;
    }
  }

  @media (max-width: 700px) {
    .splash {
      padding: 0;
    }

    .splash h1 {
      font-weight: 700;
      line-height: 1.1;
      font-size: 2.3rem;
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
        /wave from a Norwegian frontend enthusiast, backend lover and cleanness advocate working at
        <span class="black">
          <Link linkProps="{{ href: 'https://www.webstep.no', external: true }}"><img class="ws-logo" src="/images/webstep.png" alt="webstep logo" /></Link>
        </span>
        creating
        <span class="highlight">awesome</span>
        things
      </h1>
    </header>
  </Container>
</section>
