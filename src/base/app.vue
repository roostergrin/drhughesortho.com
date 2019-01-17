<template lang="pug" src="./app.pug"></template>

<script>
import Navigation from 'components/navigation/navigation'
import Header from 'components/header/header'

export default {
  async created () {
    this.$store.dispatch('GET_PAGES')
    this.$store.dispatch('GET_APP')
    this.$store.dispatch('VIEW_NAV', false)
    this.$store.dispatch('VIEW_BODY', false)
    this.$store.dispatch('VIEW_TYPES', 0)
    this.$store.dispatch('VIEW_SHOWMODAL', false)
    this.$store.dispatch('VIEW_MODALCONTENT', false)
    this.$store.dispatch('VIEW_MENU', false)
  },
  components: {
    Navigation,
    Header
  }
}
</script>

<style src='../main.sass' lang='sass'></style>
