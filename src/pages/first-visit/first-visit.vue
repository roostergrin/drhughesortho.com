<template lang="pug" src="./first-visit.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroFirstVisit from 'components/hero/hero-first-visit/hero-first-visit'
import BlockRows from 'components/block/block-rows/block-rows'
import BlockParallax from 'components/block/block-parallax/block-parallax'
import BlockTestimonials from 'components/block/block-testimonials/block-testimonials'
import CustomAboutOffice from 'components/custom/custom-about-office/custom-about-office'

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
    Loader,
    HeroFirstVisit,
    BlockRows,
    BlockParallax,
    BlockTestimonials,
    CustomAboutOffice
  }
}
</script>
