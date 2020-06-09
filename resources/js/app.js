/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import Vuetify, { VApp, VContent, VContainer } from 'vuetify/lib'
import Vuetify_ja from 'vuetify/es5/locale/ja.js'
import '@fortawesome/fontawesome-free/css/all.css'

import Alert from './components/Alert.vue'
import OriginalHeader from './components/OriginalHeader.vue'

Vue.use(Vuetify, {
    iconfont: 'fa'
});

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        lang: {
            locales: { Vuetify_ja },
            current: 'ja',
        },
    }),
    components: {
        Alert,
        OriginalHeader,
        VApp,
        VContent,
        VContainer
    },
    created() {
        // facebookログイン後リダイレクト対策
        if (window.location.hash == "#_=_") {
            window.location.hash = '';
        }
    }
});
