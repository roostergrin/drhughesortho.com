<template lang="pug" src="./navigation-desktop.pug"></template>

<script>
export default {
  computed: {
    links () {
      return this.$router.options.routes
    }
  }
}
</script>
