import Vue from 'vue';

require('./bootstrap');

Vue.component('comp1', require('./components/comp1.vue').default);
Vue.component('comp2', require('./components/comp2.vue').default);

const app = new Vue({
    el: '#app'
});
