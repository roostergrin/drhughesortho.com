<template lang="pug" src="./custom-treatments-braces.pug"></template>

<script>

export default {
  data () {
    return {
      showImage: false
    }
  },
  props: ['props'],
  methods: {
    onWaypointImage ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.showImage = true
      }
    }
  }

}
</script>
