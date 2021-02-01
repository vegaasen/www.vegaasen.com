<style>
  footer {
    max-width: 1152px;
    padding-bottom: 50px;
    padding-top: 20px;
  }

  footer article {
    text-align: left;
  }

  h2 {
    font-size: 3em;
    margin: 0;
  }

  .details {
    font-size: 1.2em;
  }

  small {
    font-size: 0.8em;
  }

  @media (max-width: 900px) {
    h2 {
      font-size: 2em;
    }
  }

  a {
    color: #1d2021;
  }

  .mailto {
    font-size: 1.4em;
    word-break: break-all;
  }
</style>

<script>
  import Fa from 'svelte-fa'
  import { faFacebook, faGithub, faLinkedin, faSteam } from '@fortawesome/free-brands-svg-icons'
</script>

<footer class="centered">
  <article>
    <section class="container">
      <h2><a class="faded mailto" href="mailto:vegard.aasen@webstep.no" title="mail to vegaasen">vegard.aasen@webstep.no</a></h2>
      <p class="details">Quite open for a discussion regarding techy work! Lets get in touch if there is anything you'd like to have done or discussed 🍰.</p>
    </section>
    <section class="container some">
      <a href="http://github.com/vegaasen" target="_blank" rel="nofollow noopener"><Fa class="pr--m" icon="{faGithub}" size="2x" /></a>
      <a href="https://www.linkedin.com/in/vegaasen" target="_blank" rel="nofollow noopener"><Fa class="pr--m" icon="{faLinkedin}" size="2x" /></a>
      <a href="https://www.facebook.com/vegaasen" target="_blank" rel="nofollow noopener"><Fa class="pr--m" icon="{faFacebook}" size="2x" /></a>
      <a href="https://steamcommunity.com/id/vegaasen" target="_blank" rel="nofollow noopener"><Fa class="pr--m" icon="{faSteam}" size="2x" /></a>
    </section>
    <section class="container">
      <p><small>Written by hand, in svelte</small></p>
      <p>
        <small>
          Baked by vegard &hearts; aasen<br />
          Photos are courtesy by myself. logos are courtesy of the represented products.
        </small>
      </p>
    </section>
  </article>
</footer>
