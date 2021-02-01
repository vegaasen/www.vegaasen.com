<style>
  .ws-logo {
    width: 100px;
  }

  .hello {
    text-transform: uppercase;
  }

  h1 {
    font-size: 5em;
    margin: 0;
  }

  .body {
    max-width: 700px;
    margin-bottom: 200px;
  }
</style>

<script>
  import SectionHeaded from '../components/common/SectionHeaded.svelte'
</script>

<article class="centered">
  <SectionHeaded title="moi">
    <p>
      <span class="hello">Hello there</span>
    </p>
    <h1>i'm vegard</h1>
    <div class="body">
      <p>
        Working as a full-stack senior programmer employed in <img class="ws-logo" src="/images/webstep.png" alt="webstep logo" />.
      </p>
      <p>
        Being employed this amazing company, translates directly in to having flexibility in terms of clients, assignments, exciting opportunities and more which fits my lifestyle
        quite well being a half-serious road-bicyclist, an enthusiastic runner and a randonèe advocate.
      </p>
      <p>
        Originally being from the fjords of Norway, within Hardanger, Vestland. For the moment, I have found a new home in a great place in awesome Drammen, Viken together with my
        lovely girlfriend.
      </p>
      <p>Triggered by all the magical technologies out there - and my thrive for improvement and exploration is imprinted in my soul and forehead #goexplore.</p>
    </div>
  </SectionHeaded>
</article>
