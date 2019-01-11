<template lang="pug" src="./first-visit.pug"></template>

<script>
import Loader from 'components/loader/loader'

export default {
  computed: {
    props () {
      return this.$store.state.pages['first-visit']
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
