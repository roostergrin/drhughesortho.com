<template lang="pug" src="./contact.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroContact from 'components/hero/hero-contact/hero-contact'
import FormContact from 'components/form/form-contact/form-contact'

export default {
  computed: {
    props () {
      return this.$store.state.pages.contact
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    HeroContact,
    FormContact
  }
}
</script>
