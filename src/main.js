import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import jQuery from "jquery";
window.axios = require("axios");
window.$ = window.jQuery = jQuery;
import VueImageLoader from "@kevindesousa/vue-image-loader";
Vue.use(VueImageLoader);
window.VueImageLoader = VueImageLoader;
import VueProgressBar from "vue-progressbar";

import { VLazyImagePlugin } from "v-lazy-image";
Vue.use(VLazyImagePlugin);
Vue.use(VueProgressBar, {
  color: "red",
  failedColor: "red",
  height: "2px"
});

import "popper.js";
import "bootstrap";
import "./assets/app.scss";
import "./assets/css/color.css";
import "./assets/css/plugins.css";
import "./assets/css/style.css";
import "./assets/css/animate.css";
// import './assets/js/main.js'
// import './assets/js/plugins.js'

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
