<template lang="pug" src="./custom-about-team.pug"></template>

<script>
import { Carousel, Slide } from 'vue-carousel'
import ArrowPrev from '@/shared/templates/PrevArrow.svg'
import ArrowNext from '@/shared/templates/NextArrow.svg'

export default {
  data () {
    return {
      activeMember: false,
      arrowNext: `<div class='custom-about-team__arrow custom-about-team__arrow--next'>${ArrowNext}</div>`,
      arrowPrev: `<div class='custom-about-team__arrow custom-about-team__arrow--prev'>${ArrowPrev}</div>`
    }
  },
  components: {
    Carousel,
    Slide
  },
  props: ['props'],
  methods: {
    selectMember (i) {
      this.activeMember = i
    }
  }
}
</script>
