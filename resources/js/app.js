require('./bootstrap');
window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('testsite-component', require('./components/TestSiteComponent.vue').default);
Vue.component('useronline-component', require('./components/site/UserOnlineComponent.vue').default);
Vue.component('newtest-component', require('./components/NewTestComponent.vue').default);

const app = new Vue({
    el: '#app',
});
