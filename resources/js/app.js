/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.logCompany = (...vars)=>{
  console.log(...vars)
}


window.formatCurrency = (value) => {

  const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 0
  })


 return formatter.format(value)
}

window.calculatePercentage = (price, price_with_discount) => {
  logCompany(price, price_with_discount)
  return 100 - (price_with_discount/price)*100
}

window.shortText = (text, stringLength = 20) => {

  if (text.length >= stringLength) {
      return text.substr(0, stringLength-3)+"..."
  }

  return text
}


window.showSpinner = () => {
  var loadingDiv = document.getElementById('loading');
  loadingDiv.style.visibility = 'visible';
}

window.hideSpinner = () => {
  var loadingDiv = document.getElementById('loading');
  loadingDiv.style.visibility = 'hidden';
}
// window.Vue = require('vue');

// import VueRouter from 'vue-router'
// Vue.use(VueRouter)



// socket
// import VueSocketIO from 'vue-socket.io'
// Vue.use(new VueSocketIO({
//     debug: true,
//     connection: '192.168.1.1:3000',
//     vuex: {
//         actionPrefix: 'SOCKET_',
//         mutationPrefix: 'SOCKET_'
//     },
//     options: {  origins: "192.168.1.1:3000"} //Optional options
// }))

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('chat', require('./components/Chat/View.vue').default);
// import Chat from './components/Chat/View'
// import App from './components/App'
// import Room from './components/Chat/Components/Room'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const router = new VueRouter({
//     history: true,
//     mode: 'history',
//     routes: [
//       // dynamic segments start with a colon
//       // { path: '/chat/login', component: Chat },
//       // { path: '/chat/room', component: Room }
//     ]
//   })

// const app = new Vue({
//     el: '#app',
//     // components:{App},
//     router
// });
