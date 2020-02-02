<template>
  <div class="about">
    <section id="skills" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 my-auto wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-title mb-lg-0 mb-md-5" style="text-align: left">
              <span>i,m expert on</span>
              <h2>Let,s Work Together<span></span></h2>
              <p>
                Phasellus accumsan scelerisque dolor, quis mattis justo bibendum
                non. Nulla sollicitudin turpis in elementum varius. Vestibulum
                ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia Curae
              </p>
              <div style="text-align: left">
                <a class="amike-btn bordered mt-3" href="#"> Hire Me Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 my-auto">
            <div
              class="skill wow fadeInUp"
              v-for="post in posts"
              data-wow-delay="0.2s"
            >
              <p>{{ post.name }}</p>
              <div
                class="skill-bar wow slideInLeft animated"
                :style="'width:' + post.parcantage + '%'"
              >
                <span class="skill-count">{{ post.parcantage }}%</span>
              </div>
            </div>
            <!-- <div class="skill wow fadeInUp" data-wow-delay="0.4s">
                        <p>Python</p>
                        <div class="skill-bar wow slideInLeft animated" style="width: 81%">
                            <span class="skill-count">81%</span>
                        </div>
                    </div>
                    <div class="skill wow fadeInUp" data-wow-delay="0.6s">
                        <p>Laravel</p>
                        <div class="skill-bar wow slideInLeft animated" style="width: 70%">
                            <span class="skill-count">70%</span>
                        </div>
                    </div>
                    <div class="skill wow fadeInUp" data-wow-delay="0.8s">
                        <p>SEO</p>
                        <div class="skill-bar wow slideInLeft animated" style="width: 90%">
                            <span class="skill-count">90%</span>
                        </div>
                    </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  data() {
    return {
      posts: [],
      errors: [],
      myImage: ""
    };
  },
  mounted() {
    this.getData();
    // this.myImage; = "http://127.0.0.1:8000/" + posts.image;
  },
  methods: {
    getData() {
      axios
        .get("http://127.0.0.1:8000/api/skill")
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
