<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="index.html" class="custom-logo-link" rel="home">
            <img src="./assets/images/logo.png" class="custom-logo" alt="Amike" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="menu-primary" class="navbar-nav ml-auto">
              <li class="nav-link" @click="start">
                <router-link to="/">Home</router-link>
              </li>
              <li class="nav-link" @click="start">
                <router-link to="/about">About</router-link>
              </li>
              <li class="nav-link" @click="start">
                <router-link to="/skills">Skills</router-link>
              </li>
              <li class="nav-link" @click="start">
                <router-link to="/portfolio">Portfolio</router-link>
              </li>
              <li class="nav-link" @click="start">
                <router-link to="/contact">Contact</router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <vue-progress-bar></vue-progress-bar>

    <router-view />
  </div>
</template>

<script>
export default {
  methods: {
    start() {
      this.$Progress.start();
      this.$Progress.finish();
    }
  }
};
</script>
<style scoped lang="scss">
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: red;
}
.router-link-exact-active {
  color: white;
}
</style>
