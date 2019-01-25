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
    links () {
      return this.$router.options.routes
    },
    props () {
      return this.$store.state.app.navigation
    },
    classList () {
      return {
        'active': this.$store.state.menu
      }
    },
    styleObject () {
      return {
        width: (this.styleWidth / 4) + 'px',
        height: (this.styleHeight / 4) + 'px'
      }
    }
  },
  mounted () {
    window.addEventListener('resize', this.myEventHandler)
  },
  methods: {
    closeMenu (e) {
      let options = { offset: -90 }
      this.$store.state.menu ? this.$store.dispatch('VIEW_MENU', false) : this.$store.dispatch('VIEW_MENU', true)
      document.body.classList.remove('body-stop')
      this.$router.push(e.path)
      // wait for animation to finish before scrolling to element
      setTimeout(() => { this.$scrollTo(e.target, options) }, 1300)
    },
    myEventHandler (e) {
      this.styleWidth = e.target.innerWidth
      this.styleHeight = e.target.innerHeight
    },
    makeAppt () {
      this.$router.push('/contact-us#form')
    },
    onWaypoint ({ going, direction }) {
      // going: in, out
      // direction: top, right, bottom, left
      if (going === this.$waypointMap.GOING_IN) {
        this.$store.dispatch('VIEW_NAV', false)
      }

      if (going === this.$waypointMap.GOING_OUT) {
        this.$store.dispatch('VIEW_NAV', true)
      }
    }
  }
}

</script>
