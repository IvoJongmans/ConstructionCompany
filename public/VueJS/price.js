var app = new Vue({
    el: '#price',
    data: {
      kosten: ''
    },
    mounted() {
        this.$root.$on('changeprice', () => {

              console.log('YOLO');

        })
      }
  })
