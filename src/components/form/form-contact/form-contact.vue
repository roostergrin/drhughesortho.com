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
  props: ['props'],
  methods: {
    validate () {
      this.$validator.validateAll()
        .then(result => {
          if (result) {
            this.onSubmit()
          }
          if (!result) {
            setTimeout(() => { this.$scrollTo('#form-contact', { offset: -135 }) }, 300)
          }
        })
        .catch((e) => {
          console.log(e)
        })
    },
    onSubmit () {
      this.formSubmitted = true
      axios.post(this.postUrl, {
        firstname: this.firstname,
        lastname: this.lastname,
        email: this.email,
        phone: this.phone,
        message: this.message
      })
        .then(res => {
          setTimeout(() => {
            this.formSuccess = true
            this.firstname = ''
            this.lastname = ''
            this.email = ''
            this.phone = ''
            this.message = ''
          }, 500)
        })
        .catch(e => { console.log(e) })
    }
  },
  created () {
    console.log(this.props)
  }
}
</script>
