
require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex';
Vue.use(Vuex);
const store = new Vuex.Store({

});

Vue.component('Root', require('./components/Root.vue').default);


const app = new Vue({
    el: '#app',
    store,
});
