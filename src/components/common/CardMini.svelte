<style>
  .card-mini {
    padding: 20px;
  }

  img {
    max-width: 100%;
  }

  @media (max-width: 900px) {
    .card-mini {
      padding: 10px;
    }
  }
</style>

<script lang="ts">
  export let title: string
  export let backgroundUrl: string
</script>

<div class="card-mini">
  <img src="{backgroundUrl}" alt="{title}" />
  <h4>{title}</h4>
  <div class="content">
    <slot />
  </div>
</div>
