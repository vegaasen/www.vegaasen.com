<style>
  .container--medium {
    margin: 0 auto;
    max-width: 1200px;
  }
</style>

<script lang="ts">
  export let size: string = 'default'
</script>

<div class="container container--{size}">
  <slot />
</div>
