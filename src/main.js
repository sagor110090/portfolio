import Vue from 'vue'
import App from './App.vue'
import router from './router'
import jQuery from 'jquery'
window.$ = window.jQuery  = jQuery 

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'red',
  failedColor: 'red',
  height: '2px'
})

import 'popper.js'
import 'bootstrap'
import './assets/app.scss'
import './assets/css/color.css'
import './assets/css/plugins.css'
import './assets/css/style.css'
import './assets/css/animate.css'
// import './assets/js/main.js'
// import './assets/js/plugins.js'

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
