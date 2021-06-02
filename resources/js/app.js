import Vue from 'vue';
import routers from './router/index'
require('./bootstrap');

// window.Vue = require('vue');

Vue.component('app-header', require('./components/Header.vue').default);

const app = new Vue({
    el: '#app',
    router : routers,
});
