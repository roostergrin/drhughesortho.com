<template lang="pug" src="./block-testimonials.pug"></template>

<script>
import { Carousel, Slide } from 'vue-carousel'
import ArrowPrev from '@/shared/templates/PrevArrow.svg'
import ArrowNext from '@/shared/templates/NextArrow.svg'

export default {
  data () {
    return {
      activeMember: false,
      arrowNext: `<div class='block-testimonials__arrow block-testimonials__arrow--next'>${ArrowNext}</div>`,
      arrowPrev: `<div class='block-testimonials__arrow block-testimonials__arrow--prev'>${ArrowPrev}</div>`
    }
  },
  components: {
    Carousel,
    Slide
  },
  props: ['props']
}
</script>
