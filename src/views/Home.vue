<template>
  <div class="home">
    <section class="banner section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-7">
            <ul class="list-inline social">
              <li class="list-inline-item">
                <a v-bind:href="posts.facebook_link">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a v-bind:href="posts.linkedin_link">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a v-bind:href="posts.instagram_link">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a v-bind:href="posts.twiter_link">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
            </ul>
            <div class="align-middle">
              <h1>{{ posts.title_1 }}</h1>
              <p>{{ posts.title_2 }}</p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#portfolio">My Portfolio</a>
                </li>
                <li class="list-inline-item">
                  <a
                    class="play-btn popup-video"
                    href="https://www.youtube.com/watch?time_continue=33&amp;v=W-j4QGAgNu8"
                  >
                    <i class="fa fa-play"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about_me_image wow fadeInUp" data-wow-delay="0.2s">
              <image-loader
                :src="'http://127.0.0.1:8000/storage/' + posts.image"
                width="508px"
                height="729px"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  //   name: 'home',
  //   components: {
  //     HelloWorld
  //   }

  data() {
    return {
      posts: [],
      errors: [],
      myImage: ""
    };
  },
  mounted() {
    this.getData();
    this.$Progress.start();
  },
  methods: {
    getData() {
      axios
        .get("http://127.0.0.1:8000/api/home")
        .then(response => {
          // JSON responses are automatically parsed.
          this.posts = response.data;
          // console.log(response.data);
          this.$Progress.finish();
        })
        .catch(e => {
          this.errors.push(e);
        });
    }
  }
};
</script>
