<style>
  h5 {
    width: 100%;
    letter-spacing: 1px;
    line-height: 1.5;
    font-weight: 400;
    font-size: 1rem;
    display: inline-block;
    vertical-align: top;
    margin: 0;
    box-sizing: border-box;
    text-transform: uppercase;
  }

  h5.left::before {
    content: '';
    display: inline-block;
    width: 50px;
    height: 1px;
    background: #555;
    vertical-align: top;
    margin-top: 11px;
    margin-right: 10px;
  }

  h5.right::after {
    content: '';
    display: inline-block;
    width: 50px;
    height: 1px;
    background: #555;
    vertical-align: top;
    margin-top: 11px;
    margin-left: 10px;
  }
</style>

<script lang="ts">
  export let title: string
  export let lefty: boolean = true
</script>

<h5 class="{lefty ? 'left' : 'right'}">{title}</h5>
