<template lang="pug" src="./hero-home.pug"></template>

<script>

export default {
  props: ['props'],
  methods: {
    onWaypoint ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.$store.dispatch('VIEW_NAV', false)
      }

      if (going === this.$waypointMap.GOING_OUT) {
        this.$store.dispatch('VIEW_NAV', true)
      }
    }
  }
}
</script>
