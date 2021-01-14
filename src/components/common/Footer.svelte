<style>
  .banner {
    max-width: 700px;
  }

  footer {
    max-width: 1152px;
    padding: 100px 0;
  }
</style>

<script>
  import Fa from 'svelte-fa'
  import { faFacebook, faGithub, faLinkedin, faSteam } from '@fortawesome/free-brands-svg-icons'
  import Emoji from '../misc/Emoji.svelte'
</script>

<footer class="centered">
  <article class="banner">
    <section>
      <h3>
        LETS W
        <Emoji reference="o">🍻</Emoji>
        RK T_G_TH_R
      </h3>
      <a href="mailto:vegaasen@gmail.com">vegaasen@gmail.com</a>
    </section>
  </article>
  <article class="grid">
    <section class="grid-box">vegard aasen 2o21</section>
    <section class="grid-box"></section>
    <section class="grid-box">
      <Fa icon="{faGithub}" />
      <Fa icon="{faFacebook}" />
      <Fa icon="{faSteam}" />
      <Fa icon="{faLinkedin}" />
    </section>
  </article>
</footer>
