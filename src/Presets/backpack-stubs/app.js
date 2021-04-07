/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import axios from 'axios';
import _ from 'lodash';
import Vue from 'vue';

import Bootstrap from 'bootstrap';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'


window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

import ExampleComponent from "./components/ExampleComponent.vue"

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

window._ = _;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.component('ExampleComponent', ExampleComponent);

new Vue({
    el: '#app',
});
