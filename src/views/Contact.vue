<template>
  <div class="about">
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                        <span>Have Any Query?</span>
                        <h2>Contact Me<span class="span-inline"></span></h2>
                        <p class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address wow fadeInLeft" data-wow-delay="0.2s">
                        <a href="#">
                            <i class="fa-fw fa fa-map-marker"></i>
                            <span>Locate us</span>
                            <p>King Street, Melbourne Victoria</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="address">
                        <a href="#">
                            <i class="fa-fw fa fa-phone"></i>
                            <span>Give us a call</span>
                            <p>Office: +01-2345-6789</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="address">
                        <a href="#">
                            <i class="fa-fw fa fa-envelope-o"></i>
                            <span>Get in online</span>
                            <p>contact@example.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.4s" novalidate="novalidate">
                        <div class="contactform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="your-name" aria-required="true" aria-invalid="false" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" aria-required="true" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" aria-required="true" placeholder="Your Subject">
                                    <textarea name="textarea" aria-required="true" placeholder="Your Message"></textarea>
                                    <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </div>
</template>
<script>
export default {
  props: {
    msg: String
  }
};
</script>
