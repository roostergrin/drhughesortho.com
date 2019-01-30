export const elFadeUp = {
  data () {
    return {
      fadeEl: false,
      fadeElTwo: false,
      fadeElThree: false,
      fadeElFour: false
    }
  },
  methods: {
    onWaypointEl ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.fadeEl = true
      }
    },
    onWaypointElTwo ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.fadeElTwo = true
      }
    },
    onWaypointElThree ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.fadeElThree = true
      }
    },
    onWaypointElFour ({ going, direction }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.fadeElFour = true
      }
    }
  }
}
