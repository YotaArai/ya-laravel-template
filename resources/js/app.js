/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import Vuetify, { VApp, VContent, VContainer, VRow, VCol } from 'vuetify/lib'
import Vuetify_ja from 'vuetify/es5/locale/ja.js'
import colors from 'vuetify/lib/util/colors'
import '@fortawesome/fontawesome-free/css/all.css'

import Alert from './components/Alert.vue'
import LoginButtons from './components/LoginButtons.vue'
import OriginalHeader from './components/OriginalHeader.vue'
import OriginalFooter from './components/OriginalFooter.vue'

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
        theme: {
            dark: false,
            themes: {
                light: {
                    primary: colors.blue.darken2,   // #1976D2
                    secondary: colors.grey.darken3, // #424242
                    accent: colors.blue.accent1,    // #82B1FF
                    error: colors.red.accent2,      // #FF5252
                    info: colors.blue,              // #2196F3
                    success: colors.green,          // #4CAF50
                    warning: colors.orange.darken1, // #FB8C00
                },
                dark: {
                    primary: colors.blue,           // #2196F3
                    secondary: colors.grey.darken3, // #424242
                    accent: colors.pink.accent2,    // #FF4081
                    error: colors.red.accent2,      // #FF5252
                    info: colors.blue,              // #2196F3
                    success: colors.green,          // #4CAF50
                    warning: colors.orange.darken1, // #FB8C00
                },
            },
        },
    }),
    components: {
        Alert,
        LoginButtons,
        OriginalHeader,
        OriginalFooter,
        VApp,
        VContent,
        VContainer,
        VRow,
        VCol
    },
    created() {
        // facebookログイン後リダイレクト対策
        if (window.location.hash == "#_=_") {
            window.location.hash = '';
        }
    }
});
