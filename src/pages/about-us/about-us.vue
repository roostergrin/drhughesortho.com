<template lang="pug" src="./about-us.pug"></template>

<script>
import Loader from 'components/loader/loader'
import CustomAboutDoctor from 'components/custom/custom-about-doctor/custom-about-doctor'
import CustomAboutTeam from 'components/custom/custom-about-team/custom-about-team'
import CustomAboutOffice from 'components/custom/custom-about-office/custom-about-office'
import BlockTestimonials from 'components/block/block-testimonials/block-testimonials'

export default {
  computed: {
    props () {
      return this.$store.state.pages['about-us']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    CustomAboutDoctor,
    CustomAboutTeam,
    CustomAboutOffice,
    BlockTestimonials
  }
}
</script>
