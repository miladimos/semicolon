require('./bootstrap');
window.Vue = require('vue');


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('../components/ExampleComponent.vue').default);


import CategoryComponent from '../components/admin/CategoryComponent';

Vue.component('categorycomponent', CategoryComponent);

const app = new Vue({
    el: '#adminvue',
});
