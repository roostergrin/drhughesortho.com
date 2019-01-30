<template lang="pug" src="./block-parallax.pug"></template>

<script>
import { elFadeUp } from '@/mixins'

export default {
  props: ['props'],
  mixins: [elFadeUp]
}
</script>
