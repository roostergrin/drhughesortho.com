<template lang="pug" src="./block-gallery.pug"></template>

<script>

export default {
  data () {
    return {
      fadeImage: false
    }
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
