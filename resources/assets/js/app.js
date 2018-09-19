/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./script.ppal.js');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('banner-ppal', require('./components/frontend/banner_ppal.vue'));
Vue.component('navbar-desk', require('./components/frontend/navbar_desk.vue'));
Vue.component('detalle-modelo', require('./components/frontend/detalle_modelo.vue'));

const app = new Vue({
    el: '#app'
});
