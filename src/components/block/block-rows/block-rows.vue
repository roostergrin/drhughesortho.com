<template lang="pug" src="./block-rows.pug"></template>

<script>

export default {
  props: ['props'],
  methods: {
    onWaypointImage ({ going, direction, el }) {
      if (going === this.$waypointMap.GOING_IN) {
        el.classList.add('block-rows__image-mask--active')
        el.children[0].classList.add('block-rows__image--active')
      }
    }
  }
}
</script>
