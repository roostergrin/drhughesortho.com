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
    }
  }
}
</script>
