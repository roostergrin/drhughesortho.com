<template lang="pug" src="./custom-home-welcome.pug"></template>

<script>

export default {
  props: ['props'],
  methods: {
    learnMore (path, scroll) {
      this.$store.dispatch('VIEW_MENU', true)
      setTimeout(() => {
        this.$router.push(path)
        this.$store.dispatch('VIEW_MENU', false)
      }, 1300)
      setTimeout(() => {
        this.$scrollTo(scroll, { offset: -180 })
      }, 1800)
    }
  }
}
</script>
