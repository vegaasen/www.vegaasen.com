<style>
  .grid-box-double {
    display: grid;
    grid-template-columns: 50% 50%;
    grid-gap: 10px;
  }
  .grid-element {
    border-radius: 5px;
    padding: 20px;
    font-size: 1.5em;
  }
  @media (max-width: 900px) {
    .grid-box-double {
      grid-template-columns: 100%;
      grid-gap: 0;
    }
    .grid-element {
      border-radius: 0;
      padding: 10px;
      font-size: 1.5em;
    }
  }
</style>

<script>
  import SectionHeaded from '../components/common/SectionHeaded.svelte'
  import Card from '../components/common/Card.svelte'
</script>

<article class="background-gray--light">
  <section class="developer">
    <SectionHeaded title="meet me" titleAsLeft="{false}">
      <div class="grid-box-double">
        <div class="grid-element"><Card title="Road cycling" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Mountain biking" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Coding" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Running" size="large" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Cars &amp; coffee" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Baking" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Alpine &amp; snow" size="large" backgroundUrl="/images/IMG_5010.jpg" /></div>
        <div class="grid-element"><Card title="Gaming" backgroundUrl="/images/IMG_5010.jpg" /></div>
      </div>
    </SectionHeaded>
  </section>
</article>
