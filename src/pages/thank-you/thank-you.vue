<template lang="pug" src="./thank-you.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroThank from 'components/hero/hero-thank/hero-thank'

export default {
  computed: {
    props () {
      return this.$store.state.pages['thank-you']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    HeroThank
  }
}
</script>
