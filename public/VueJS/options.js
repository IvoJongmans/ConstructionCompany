
var app = new Vue({
    el: '#options',
    data: {
      dakpannen: ''
    },
    methods: {
        veranderprijs: function() {
          this.$root.$emit('changeprice');
          console.log('ik ga de prijs veranderen');
        }
      }
  })
