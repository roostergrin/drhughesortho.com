<template lang="pug" src="./custom-home-welcome.pug"></template>

<script>

export default {
  data () {
    return {
      activeTile: false
    }
  },
  props: ['props'],
  methods: {
    learnMore (path, scroll) {
      this.$store.dispatch('VIEW_MENU', true)
      setTimeout(() => {
        this.$router.push(path)
        this.$store.dispatch('VIEW_MENU', false)
      }, 1300)
      setTimeout(() => {
        this.$scrollTo(scroll, { offset: -86 })
      }, 2100)
    },
    learnMoreMobile (path, scroll) {
      this.$router.push(path)
      setTimeout(() => {
        this.$scrollTo(scroll, { offset: -68 })
      }, 500)
    },
    selectTile (j) {
      this.activeTile = j
    }
  }
}
</script>
