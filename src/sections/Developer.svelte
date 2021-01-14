<style>
  .developer {
    height: 100vh;
  }
</style>

<script>
  import Emoji from '../components/misc/Emoji.svelte'
  import Saying from '../components/common/Saying.svelte'
</script>

<section>
  <Saying by="Master Yoda" label="omg" quote="Do or do not. There is no try." cite="Star Wars Episode V" />
  <section class="developer">
    <h1>
      <Emoji reference="hand-wave">👋</Emoji>
    </h1>
  </section>
</section>
