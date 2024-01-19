<template lang="pug" src="./block-gallery.pug"></template>

<script>
import { Carousel, Slide } from 'vue-carousel'
import ArrowPrev from '@/shared/templates/PrevArrow.svg'
import ArrowNext from '@/shared/templates/NextArrow.svg'

export default {
  data () {
    return {
      fadeImage: false,
      arrowNext: `<div class='block-gallery__arrow block-gallery__arrow--next'>${ArrowNext}</div>`,
      arrowPrev: `<div class='block-gallery__arrow block-gallery__arrow--prev'>${ArrowPrev}</div>`
    }
  },
  components: {
    Carousel,
    Slide
  },
  props: ['props'],
  methods: {
    onWaypoint ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.fadeImage = true
      }
    }
  }
}
</script>
