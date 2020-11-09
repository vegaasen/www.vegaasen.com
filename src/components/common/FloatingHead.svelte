<style>
  .floatingHead {
    position: fixed;
    top: 20px;
    left: 20px;
    width: 90px;
    height: 60px;
    text-decoration: none;
    display: block;
    z-index: 999;
  }

  .its-me {
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    z-index: 1;
    margin: 0;
    transition: transform 0.2s 0.6s ease-in-out;
  }

  .its-me .figure--rounded {
    transition: transform 0.2s ease-in-out;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    max-width: 100%;
    vertical-align: middle;
  }

  @media (min-width: 960px) {
    .floatingHead {
      left: 40px;
    }
  }
</style>

<header class="floatingHead">
  <figure class="its-me"><img src="/images/vegaasen.jpg" alt="Vegard Aasen" class="figure--rounded" /></figure>
</header>
