import './bootstrap';
import 'admin-lte';

import router from './routes';
import App from './components/App.vue';



//Vue.component('home', require('./components/HomeKitas.vue'));

new Vue({
    el: '#app',
    components: {
        App
    },
    router
})
