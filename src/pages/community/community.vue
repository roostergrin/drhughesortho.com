<template lang="pug" src="./community.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroCommunity from 'components/hero/hero-community/hero-community'
import CustomCommunityIntro from 'components/custom/custom-community-intro/custom-community-intro'
import FormSponsorship from 'components/form/form-sponsorship/form-sponsorship'

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
    Loader,
    HeroCommunity,
    CustomCommunityIntro,
    FormSponsorship
  }
}
</script>
