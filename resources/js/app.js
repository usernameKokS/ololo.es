/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';

import VModal from 'vue-js-modal';
import EleUploadVideo from 'vue-ele-upload-video';

import VueVideoPlayer from 'vue-video-player';
// require videojs style
import 'video.js/dist/video-js.css';
import 'vue-video-player/src/custom-theme.css';
import i18n from './i18n'
import VuePlaylist from 'vue-playlist';

require('./bootstrap');

window.Vue = require('vue');


import VueAwesomeSwiper from 'vue-awesome-swiper'

// import style
import 'swiper/css/swiper.css'
Vue.use(VueAwesomeSwiper);


// import { LMap, LTileLayer, LMarker} from "vue2-leaflet";
// import 'leaflet/dist/leaflet.css';


// Vue.component('lmap', LMap);
// Vue.component('l-tile-layer', LTileLayer);
// Vue.component('l-marker', LMarker);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('photo', require('./components/Photo.vue').default);
Vue.component('videoupload', require('./components/Videoupload.vue').default);
Vue.component('appmodal', require('./components/Modal.vue').default);
Vue.component('registermodal', require('./components/Registermodal.vue').default);
Vue.component('postcreate', require('./components/Postcreate.vue').default);
Vue.component('coor', require('./components/Coor.vue').default);
Vue.component('policy-pdf', require('./components/PolicyPDF.vue').default);
Vue.component('checkphone', require('./components/Checkphone.vue').default);
Vue.component('v-select', vSelect);
Vue.component('guestarea', require('./components/Guestarea.vue').default);
Vue.component('posts', require('./components/Posts.vue').default);
Vue.component('carusel', require('./components/Carusel.vue').default);
Vue.component('stats', require('./components/Stats.vue').default);
Vue.component('paymodal', require('./components/Paymodal.vue').default);
Vue.component('billing', require('./components/Billing.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('foro', require('./components/Foro.vue').default);
Vue.component('estad', require('./components/Estad.vue').default);
Vue.component('policy', require('./components/Policy.vue').default);
Vue.component('blocked', require('./components/Blocked.vue').default);
Vue.component('tariffpay', require('./components/TariffPay.vue').default);
Vue.component('tariffdetail', require('./components/TariffDetail.vue').default);
Vue.component('tariffpaycoor', require('./components/TariffPayCoor.vue').default);
Vue.component('videolist-faq', require('./components/Videolistfaq.vue').default);

const VueUploadComponent = require('vue-upload-component');

Vue.component('file-upload', VueUploadComponent);

Vue.use(VModal, {
    dynamic: true,
    dynamicDefaults: {
        clickToClose: true,
        adaptive: true
    }
});
Vue.component(EleUploadVideo.name, EleUploadVideo);

Vue.use(VueVideoPlayer,);
Vue.use(VuePlaylist);
var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)

import Register from './components/Register.vue'

import Datepicker from 'vuejs-datepicker';
import es from 'vuejs-datepicker/dist/locale/translations/es'

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask)

import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyDN2hAA5L9opTbXIJuolUBu7F0_uoL6Tvo',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        region: 'ES',
        language: 'es',
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)

        // // If you want to set the version, you can do so:
        v: '3.38'
    },

    // // If you intend to programmatically custom event listener code
    // // (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
    // // instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
    // // you might need to turn this on.
    // autobindAllEvents: false,

    // // If you want to manually install components, e.g.
    // // import {GmapMarker} from 'vue2-google-maps/src/components/marker'
    // // Vue.component('GmapMarker', GmapMarker)
    // // then disable the following:
    // installComponents: true,
})


import Sendemail from "./components/Sendemail";
import Notify from './components/Notify';



import vClickOutside from 'v-click-outside'
import NotifyMasAnuncios from "./components/NotifyMasAnuncios";

Vue.use(vClickOutside)

const app = new Vue({
	i18n,
    directives: {},
    components: {
        Datepicker
    },
    el: '#app',
    data() {
        return {
            vcoConfig: {
                handler: this.handler,
                middleware: this.middleware,
                events: ['dblclick', 'click'],
                // Note: The default value is true, but in case you want to activate / deactivate
                //       this directive dynamically use this attribute.
                isActive: true
              },
            es: es,
            menu: false,
            resetEmail: null,
            waitSend: false,
			playlist: [
				{bucketRef: '/videos/Como borar anuncio.mp4'},
				{bucketRef: '/videos/Como cambiar contrasena.mp4'}
			]
        }
    },
    methods: {
        handler (event) {
            // console.log('Clicked outside (Using config), middleware returned true :)')
            // this.menu = false;
        },
        middleware (event) {
            return event.target.className !== 'modalMenu';
        },
        onClickOutside (event) {
            this.menu = false;
          },
        openMenuName() {
            this.menu = !this.menu;

        },
        hideMenu() {
            // this.menu = false;
        },
        openModalCreate() {
            this.$modal.show(NotifyMasAnuncios, {}, {
                width: 380,
                height: "auto",
                classes: ['v--modal-overlay', 'v--modal-box', 'visible-modal']
            });
        },
        openForgotPass(email) {
            this.resetEmail = email;
            this.$modal.show('resetPass');
            this.menu = false;
        },
        forgotPass(email) {
            this.waitSend = true;
            axios.post("/email/forgot", {email: this.resetEmail}).then(response => {
                this.$modal.hide('resetPass');
                this.$modal.show(Sendemail, {}, {
                    width: "90%",
                    maxWidth: 410,
                    height: 'auto'
                });
                this.waitSend = false;
            }).catch(error => {
                this.$modal.hide('resetPass');
                console.log(error);
                if (error.response.status == 422) {
                    this.loginerrors = error.response.data.errors;
                    this.$modal.show(Notify, {
                        title: "Algo no exitoso",
                        type: "error",
                        porterrors: error.response.data.errors
                    }, {
                        width: 380,
                        height: "auto"
                    });
                }
                this.waitSend = false;
            });
        },
        openRegister() {

            this.$modal.show(Register, {}, {
                height: 'auto',
                minWidth: 380,
                resizable: true,
                width: 810
            });
        }
    },
    mounted() {

        window.addEventListener("orientationchange", function () {
            location.reload();
        }, false);
    },
});

Vue.filter('truncate', function (text, length, suffix) {
    if (text.length > length) {
        return text.substring(0, length) + suffix;
    } else {
        return text;
    }
});
