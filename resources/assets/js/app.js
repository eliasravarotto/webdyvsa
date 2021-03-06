/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap_backend');
require('./script.ppal.js');
require('vue-image-lightbox/dist/vue-image-lightbox.min.css')

window.swal = require('sweetalert2');
window.Vue = require('vue');

Vue.component('slide', require('./components/frontend/slides/slide.vue'));

const app = new Vue({
    el: '#app'
});