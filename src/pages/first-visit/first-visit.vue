<template lang="pug" src="./first-visit.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroFirstVisit from 'components/hero/hero-first-visit/hero-first-visit'
import BlockRows from 'components/block/block-rows/block-rows'
import BlockParallax from 'components/block/block-parallax/block-parallax'
import BlockTestimonials from 'components/block/block-testimonials/block-testimonials'

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
    BlockTestimonials
  }
}
</script>
