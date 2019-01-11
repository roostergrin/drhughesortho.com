<template lang="pug" src="./form-contact.pug"></template>

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
      message: '',
      postUrl: api + '/rg-mail/v1/contact',
      formSubmitted: false,
      formSuccess: false
    }
  },
  methods: {
    validate () {
      this.$validator.validateAll()
      axios.post(this.postUrl, {
        firstname: this.firstname,
        lastname: this.lastname,
        email: this.email,
        phone: this.phone,
        message: this.message
      })
        .then(res => { console.log(res) })
        .catch(e => { console.log(e) })
    }
  }
}
</script>
