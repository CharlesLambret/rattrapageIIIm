import './bootstrap';

import Vue from 'vue'


Vue.component('select-table', require('./components/TableSelect.vue').default)

const app = new Vue({
    el: '#app',
});
