<template lang="pug" src="./navigation-mobile.pug"></template>

<script>
export default {
  data () {
    return {
      showMenu: false
    }
  },
  computed: {
    props () {
      return this.$store.state.app.navigation
    },
    links () {
      return this.$router.options.routes
    }
  },
  methods: {
    toggleMenu () {
      this.showMenu = !this.showMenu
    },
    goHome () {
      this.$router.push('/')
      this.showMenu = false
    }
  }
}
</script>
