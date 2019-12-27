/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap_backend');
require('./script.ppal.js');

window.swal = require('sweetalert2');
window.Vue = require('vue');

Vue.component('detalle-modelo', require('./components/frontend/modelos/detalle_modelo.vue'));
Vue.component('index-usados', require('./components/frontend/usados/index.vue'));
Vue.component('show-usado', require('./components/frontend/usados/show.vue'));
Vue.component('team-tpa', require('./components/frontend/tpa/team-tpa.vue'));

const app = new Vue({
    el: '#app'
});