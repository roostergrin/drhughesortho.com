<template lang='pug' src='./slider-office.pug'></template>

<script>
export default {
  data () {
    return {
      swiperOption: {
        slidesPerView: 1,
        loop: true,
        autoplay: {
          delay: 5000
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        navigation: {
          prevEl: '.slider-office__prev-arrow',
          nextEl: '.slider-office__next-arrow'
        }
      }
    }
  },
  props: ['props']
}
</script>
