<template lang='pug' src='./menu.pug'></template>

<script>
export default {
  data () {
    return {
      styleWidth: window.innerWidth,
      styleHeight: window.innerHeight
    }
  },
  computed: {
    props () {
      return this.$store.state.app.navigation
    },
    links () {
      return this.$router.options.routes
    },
    styleObject () {
      return {
        width: (this.styleWidth / 4) + 'px',
        height: (this.styleHeight / 3) + 'px'
      }
    }
  }
}
</script>
