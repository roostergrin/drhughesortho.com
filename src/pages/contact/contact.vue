<template lang="pug" src="./contact.pug"></template>

<script>
import Loader from 'components/loader/loader'

export default {
  computed: {
    props () {
      return this.$store.state.pages.community
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader
  }
}
</script>
