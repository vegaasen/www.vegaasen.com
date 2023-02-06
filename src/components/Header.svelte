<script lang='ts'>
  import Navigation from './Navigation.svelte'

  let burgerOpen = false
</script>

<style>

    header {
        margin-bottom: 6em;
    }

    .title {
        display: inline-block;
        position: relative;
        width: 40%;
        margin-right: 1%;
        top: 0;
        font-size: 1.7em;
        line-height: 1.08;
        font-weight: 400;
        background: 0 0;
    }

    a {
        text-decoration: none;
        color: #000;
    }

    button {
        position: fixed;
        top: 1.3em;
        right: 1em;
        width: 2.5em;
        height: 1.25em;
        background: 0 0;
        z-index: 20;
        color: #000;
        display: block;
        cursor: pointer;
        font: inherit;
        text-align: inherit;
        border: none;
        border-radius: 0;
        overflow: visible;
        -webkit-appearance: none;
    }

    .black {
        background-color: #000;
        padding-top: 15px;
    }

    .ws-logo {
        width: 145px;
        filter: invert(100%);
    }

</style>

<header>
  <div class='title'>
    /who<br />vegard aasen<br />
    a web wizard@<span class='black'><a href='https://www.webstep.no' class='link' target='_blank'><img class='ws-logo' src='images/webstep.png' alt='webstep (logo)'></a></span>
  </div>
  <div class='title'>
    <a href='//www.vegaasen.com'>/hello<br />norwegian frontend enthusiast, backend lover</a>
  </div>
  <button type='button' class='header-navigation-toggle' data-toggle='navigation-visible' aria-label='Open navigation' on:click={() => burgerOpen = !burgerOpen}>
    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 180 80'>
      <path fill='none' stroke='black' stroke-width='20' stroke-miterlimit='10' d='M0 10h180M0 70h180'></path>
    </svg>
  </button>
  {#if burgerOpen}
    <Navigation/>
  {/if}
</header>