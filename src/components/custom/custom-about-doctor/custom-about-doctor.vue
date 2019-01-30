<template lang="pug" src="./custom-about-doctor.pug"></template>

<script>
export default {
  data () {
    return {
      activeTab: 0,
      activeDoctor: null
    }
  },
  props: ['props'],
  methods: {
    setActive (i, j) {
      this.activeDoctor = i
      this.activeTab = j
    },
    onWaypointDoctors ({ going, direction, el }) {
      if (going === this.$waypointMap.GOING_IN) {
        el.classList.add('custom-about-doctor__image-mask--active')
        el.children[0].classList.add('custom-about-doctor__image--active')
      }
    }
  }
}
</script>
