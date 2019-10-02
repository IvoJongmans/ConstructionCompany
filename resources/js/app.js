import Vue from 'vue';

require('./bootstrap');

Vue.component('option_roofcolor', require('./components/option_roofcolor.vue').default);
Vue.component('option_wall_material', require('./components/option_wall_material.vue').default);
Vue.component('house_roof', require('./components/house_roof.vue').default);
Vue.component('house_wall_material', require('./components/house_wall_material.vue').default);
Vue.component('price_roof', require('./components/price_roof.vue').default);
Vue.component('price_total', require('./components/price_total.vue').default);

const app = new Vue({
    el: '#app'
});
