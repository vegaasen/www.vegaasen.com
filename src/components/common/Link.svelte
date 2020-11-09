<script lang="ts">
  export type LinkProps = {
    href: string
    class?: string
    external: boolean
    style?: string
  }
  export let linkProps: LinkProps
</script>

<a href="{linkProps.href}" class="link {linkProps.class}" target="{linkProps.external === true ? '_blank' : '_self'}"><slot /></a>
