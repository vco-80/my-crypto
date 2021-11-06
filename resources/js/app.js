/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vuetify from './plugins/vuetify';
import VueRouter from 'vue-router';

import router from './router/index';
import store from './store/index';
import App from './App.vue';

Vue.use(VueRouter);

const app = new Vue({
    components: { App },
    vuetify: Vuetify,
    router,
    store,
    el: "#app",
});;
