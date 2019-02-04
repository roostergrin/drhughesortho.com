<template lang="pug" src="./home.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroHome from 'components/hero/hero-home/hero-home'
import CustomHomeWelcome from 'components/custom/custom-home-welcome/custom-home-welcome'
import BlockParallax from 'components/block/block-parallax/block-parallax'
import BlockTestimonials from 'components/block/block-testimonials/block-testimonials'
import BlockGallery from 'components/block/block-gallery/block-gallery'

export default {
  computed: {
    props () {
      return this.$store.state.pages.home
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    HeroHome,
    CustomHomeWelcome,
    BlockParallax,
    BlockTestimonials,
    BlockGallery
  }
}
</script>
