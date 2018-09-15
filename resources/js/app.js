require('./bootstrap');

window.Vue = require('vue');

Vue.component('movement-component', require('./components/MovementComponent.vue'));
Vue.component('modal-component', require('./components/ModalComponent.vue'));
Vue.component('input-component', require('./components/InputComponent.vue'));

const app = new Vue({
    el: '#app',
});
