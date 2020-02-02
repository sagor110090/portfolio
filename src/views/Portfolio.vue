<template>
  <div class="about">
    <section id="portfolio" class="section-padding alt-color">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title underline">
              <h2>Portfolio Showcase<span class="span-inline"></span></h2>
              <p class="title-desc">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum standard dummy text.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="portfolio-filter wow fadeInUp" data-wow-delay="0.2s">
              <ul class="list-inline">
                <li class="select-cat list-inline-item active" data-filter="*">
                  All Works
                </li>
                <li class="list-inline-item" data-filter=".art-direction">
                  Art Direction
                </li>
                <li class="list-inline-item" data-filter=".branding">
                  Branding
                </li>
                <li class="list-inline-item" data-filter=".design">Design</li>
                <li class="list-inline-item" data-filter=".web">Web</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="isotope_items row wow fadeInUp" data-wow-delay="0.4s">
              <!-- Item -->
              <a
                href="@/assets/images/p-1.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item art-direction"
                data-source="@/assets/images/p-1.jpg"
                title="Rock"
              >
                <img src="@/assets/images/p-1.jpg" alt="Rock" />
                <div class="single_item_content">
                  <span>Art Direction</span>
                  <h6>Rock</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-2.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item branding"
                data-source="@/assets/images/p-2.jpg"
                title="In Time"
              >
                <img src="@/assets/images/p-2.jpg" alt="In Time" />
                <div class="single_item_content">
                  <span>Branding</span>
                  <h6>In Time</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-3.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item design"
                data-source="@/assets/images/p-3.jpg"
                title="Mockup"
              >
                <img src="@/assets/images/p-3.jpg" alt="Mockup" />
                <div class="single_item_content">
                  <span>Design</span>
                  <h6>Mockup</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-4.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item web"
                data-source="@/assets/images/p-4.jpg"
                title="Treasure"
              >
                <img src="@/assets/images/p-4.jpg" alt="Treasure" />
                <div class="single_item_content">
                  <span>Web</span>
                  <h6>Treasure</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-5.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item art-direction"
                data-source="@/assets/images/p-5.jpg"
                title="Daily Note"
              >
                <img src="@/assets/images/p-5.jpg" alt="Daily Note" />
                <div class="single_item_content">
                  <span>Art Direction</span>
                  <h6>Daily Note</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-6.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item branding"
                data-source="@/assets/images/p-6.jpg"
                title="Handcraft"
              >
                <img src="@/assets/images/p-6.jpg" alt="Handcraft" />
                <div class="single_item_content">
                  <span>Branding</span>
                  <h6>Handcraft</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-7.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item design"
                data-source="@/assets/images/p-7.jpg"
                title="Pencil"
              >
                <img src="@/assets/images/p-7.jpg" alt="Pencil" />
                <div class="single_item_content">
                  <span>Design</span>
                  <h6>Pencil</h6>
                </div>
              </a>
              <!-- Item -->
              <a
                href="@/assets/images/p-8.jpg"
                class="col-md-4 col-sm-4 col-xs-6 single_item web"
                data-source="@/assets/images/p-8.jpg"
                title="Focus"
              >
                <img src="@/assets/images/p-8.jpg" alt="Focus" />
                <div class="single_item_content">
                  <span>Web</span>
                  <h6>Focus</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
