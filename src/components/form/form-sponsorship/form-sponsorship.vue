<template lang="pug" src="./form-sponsorship.pug"></template>

<script>
import api from 'api'
import axios from 'axios'
export default {
  data: () => {
    return {
      firstname: '',
      lastname: '',
      email: '',
      phone: '',
      day: '',
      time: '',
      organization: '',
      eventname: '',
      description: '',
      moneyrequested: '',
      postUrl: api + '/rg-mail/v1/sponsorship',
      formSubmitted: false,
      formSuccess: false
    }
  },
  props: ['props'],
  methods: {
    validate () {
      this.$validator.validateAll()
      axios.post(this.postUrl, {
        firstname: this.firstname,
        lastname: this.lastname,
        email: this.email,
        phone: this.phone,
        day: this.day,
        time: this.time,
        organization: this.organization,
        eventname: this.eventname,
        description: this.description,
        moneyrequested: this.moneyrequested
      })
        .then(res => { console.log(res) })
        .catch(e => { console.log(e) })
    }
  }
}
</script>
