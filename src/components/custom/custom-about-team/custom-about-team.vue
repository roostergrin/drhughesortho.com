<template lang="pug" src="./custom-about-team.pug"></template>

<script>

export default {
  data () {
    return {
      activeMember: false
    }
  },
  props: ['props'],
  methods: {
    selectMember (i) {
      this.activeMember = i
    }
  }
}
</script>
