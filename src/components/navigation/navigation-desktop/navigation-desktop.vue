<template lang="pug" src="./navigation-desktop.pug"></template>

<script>
export default {
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
      let menuOpen = this.$store.state.menu
      let menuClosed = !this.$store.state.menu
      if (menuOpen) {
        this.$store.dispatch('VIEW_MENU', false)
        this.$store.state.menu ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
      }
      if (menuClosed) {
        this.$scrollTo('#head', { duration: 500 })
        setTimeout(() => {
          this.$store.dispatch('VIEW_MENU', true)
          this.$store.state.menu ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
        }, 400)
      }
    },
    closeMenu () {
      if (this.$store.state.menu) {
        this.$store.dispatch('VIEW_MENU', false)
        document.body.classList.remove('body-stop')
        this.$router.push('/')
      }
      // scroll to top before fade
      if (!this.$store.state.menu && this.$route.path !== '/') {
        this.$store.dispatch('VIEW_MENU', true)
        setTimeout(() => {
          this.$router.push('/')
          this.$store.dispatch('VIEW_MENU', false)
        }, 1300)
      }
    }
  }
}
</script>
