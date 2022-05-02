<template lang="pug" src="./accessibility.pug"></template>

<script>
import Loader from 'components/loader/loader'
import HeroThank from 'components/hero/hero-thank/hero-thank'

export default {
  computed: {
    props () {
      return this.$store.state.pages['accessibility']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    HeroThank
  },
  data () {
    return {
      companyName: 'David Hughes Orthodontics', // Fill this in
      domain: "<a href='https://drhughesortho.com'>drhughesortho.com</a>", // Fill this in
      email: "<a href='mailto:info@drhughesortho.com'>info@drhughesortho.com</a>", // Fill this in
      phone: "<a href='tel:+17034510502'>703.451.0502</a>", // Fill this in
      formattedEmail: ''
    }
  },
  mounted () {
    this.formatEmail()
  },
  methods: {
    formatEmail () {
      this.formattedEmail = '<a aria-label="email ' + this.email + '" href="mailto:' + this.email + '">' + this.email + '</a>'
    }
  }
}
</script>
