<style>
  section {
    font-size: 1.4em;
  }

  section.left {
    text-align: left;
  }

  section.right {
    text-align: right;
  }

  .content {
    padding-top: 20px;
  }

  .body {
    text-align: left;
  }

  .heading {
    padding-top: 15px;
    padding-bottom: 35px;
  }
</style>

<script lang="ts">
  import Heading from './Heading.svelte'
  import Container from './Container.svelte'

  export let title: string
  export let subTitle: string = undefined
  export let titleAsLeft: boolean = true
</script>

<Container size="medium">
  <section class="{`heading ${titleAsLeft === true ? 'left' : 'right'}`}">
    <Heading title="{title}" lefty="{titleAsLeft}" />
  </section>
  <section class="body">
    <div class="content">
      {#if subTitle}
        <div>
          <h2>{subTitle}</h2>
        </div>
      {/if}
      <div class="content">
        <slot />
      </div>
    </div>
  </section>
</Container>
