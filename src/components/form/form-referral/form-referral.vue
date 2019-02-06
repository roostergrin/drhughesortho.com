<template lang="pug" src="./form-referral.pug"></template>

<script>
import api from 'api'
import axios from 'axios'
export default {
  data: () => {
    return {
      doctorname: '',
      patientname: '',
      email: '',
      phone: '',
      message: '',
      postUrl: api + '/rg-mail/v1/referral',
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
        })
        .catch((e) => {
          console.log(e)
        })
    },
    onSubmit () {
      this.formSubmitted = true
      axios.post(this.postUrl, {
        doctorname: this.doctorname,
        patientname: this.patientname,
        email: this.email,
        phone: this.phone,
        message: this.message
      })
        .then(res => {
          setTimeout(() => {
            this.formSuccess = true
            this.doctorname = ''
            this.patientname = ''
            this.email = ''
            this.phone = ''
            this.message = ''
          }, 500)
        })
        .catch(e => { console.log(e) })
    }
  }
}
</script>
