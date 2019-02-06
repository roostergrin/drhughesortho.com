<template lang="pug" src="./footer.pug"></template>

<script>
import ModalReferral from 'components/modal/modal-referral/modal-referral'

export default {
  data () {
    return {
      showModalReferral: false
    }
  },
  computed: {
    props () {
      return this.$store.state.app.footer
    }
  },
  methods: {
    toggleModalReferral () {
      this.showModalReferral = !this.showModalReferral
      this.showModalReferral ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
    }
  },
  components: {
    ModalReferral
  }
}
</script>
