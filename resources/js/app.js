require('./bootstrap');

window.Vue = require('vue');

Vue.component('home-component', require('./components/HomeComponent.vue'));
Vue.component('movement-component', require('./components/MovementComponent.vue'));
Vue.component('modal-component', require('./components/ModalComponent.vue'));
Vue.component('row-component', require('./components/RowComponent.vue'));

const app = new Vue({
    el: '#app',
});
