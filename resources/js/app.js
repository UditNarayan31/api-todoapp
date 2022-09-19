require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue';

import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import axios from 'axios';


Vue.use(VueAxios, axios);
const app = new Vue(Vue.util.extend(App)).$mount('#app');