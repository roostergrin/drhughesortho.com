<template lang="pug" src="./treatments.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroTreatments from 'components/hero/hero-treatments/hero-treatments'
import BlockRows from 'components/block/block-rows/block-rows'
import CustomTreatmentsBraces from 'components/custom/custom-treatments-braces/custom-treatments-braces'
import CustomTreatmentsTech from 'components/custom/custom-treatments-tech/custom-treatments-tech'
import BlockTestimonials from 'components/block/block-testimonials/block-testimonials'
import BlockGallery from 'components/block/block-gallery/block-gallery'

export default {
  computed: {
    props () {
      return this.$store.state.pages.treatments
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    HeroTreatments,
    BlockRows,
    CustomTreatmentsBraces,
    CustomTreatmentsTech,
    BlockTestimonials,
    BlockGallery
  }
}
</script>
