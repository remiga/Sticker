import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';



window.Vue = Vue;
Vue.use(VueRouter);
import locale from 'iview/dist/locale/en-US';
Vue.use(iView, {locale: locale});
library.add(faCoffee);
Vue.component('font-awesome-icon', FontAwesomeIcon);



window.axios = axios;

window.$ = window.jQuery = require('jquery');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
// import "buefy/dist/buefy.css";
