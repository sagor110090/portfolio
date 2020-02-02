<template>
  <div class="about">
    <section id="about" class="section-padding alt-color">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title underline">
              <h2>About Me</h2>
              <p class="title-desc"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-5 text-center wow fadeInLeft"
            data-wow-delay="0.2s"
          >
            <img
              src="@/assets/images/me-01-alt.png"
              title="me-01"
              alt="me-01"
            />
          </div>
          <div class="col-lg-7 my-auto wow fadeInRight" data-wow-delay="0.2s">
            <h3><strong>Hi There</strong></h3>
            <div class="about-me-description">
              <p>
                {{ posts.description }}
              </p>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="contact-info">
                  <strong><span>Name:</span></strong>
                  <p>{{ posts.name }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-info">
                  <strong><span>Email:</span></strong>
                  <p>{{ posts.email }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-info">
                  <strong><span>Phone:</span></strong>
                  <p>{{ posts.phone }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-info">
                  <strong><span>LinkedIn:</span></strong>
                  <p>{{ posts.linkedin }}</p>
                </div>
              </div>
            </div>
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
        .get("http://127.0.0.1:8000/api/about")
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
