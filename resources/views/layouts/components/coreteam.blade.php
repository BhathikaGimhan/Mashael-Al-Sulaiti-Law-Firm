<section class="py-5 bg-dark">
    <div class="container ">
        <h1 class="text-white mb-5">Our Team</h1>
        <div class="position-relative px-5">

            <!-- External slider prev/next buttons -->
            <button type="button" id="prev"
                class="btn btn-prev btn-icon btn-sm btn-outline-light rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3">
                <i class="ai-arrow-left"></i>
            </button>
            <button type="button" id="next"
                class="btn btn-prev btn-icon btn-sm btn-outline-light rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3">
                <i class="ai-arrow-right"></i>
            </button>

            <!-- Slider -->
            <div class="swiper"
                data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 16,
          "loop": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "navigation": {
            "prevEl": "#prev",
            "nextEl": "#next"
          },
          "breakpoints": {
            "600": {
              "slidesPerView": 2
            },
            "1000": {
              "slidesPerView": 3
            }
          },
          "autoplay": {
            "delay": 3000,
            "pauseOnMouseEnter": true
          }
        }'>
                <div class="swiper-wrapper core-team">

                    <!-- Item -->
                    <div class="swiper-slide px-4">
                        <a href="#" class="card-hover d-inline-block text-center text-decoration-none">
                            <img src="assets/img/landing/creative-agency/team/1.jpg" class="d-block rounded-1 mb-3"
                                alt="">
                            <h3 class="h5 text-white mb-1">Mr. Monir AbdulAziz Shalaby</h3>
                            <p class="text-white text-muted mb-0">
                                Egyptian Bar Association Member
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="swiper-slide px-4">
                        <a href="#" class="card-hover d-inline-block text-center text-decoration-none">
                            <img src="assets/img/landing/creative-agency/team/2.jpg" class="d-block rounded-1 mb-3"
                                alt="">
                            <h3 class="h5 text-white mb-1">Mr. AbdelRaouf Mohd Gharibeh</h3>
                            <p class="text-muted mb-0">Jordanian lawyer</p>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide px-4">
                        <a href="#" class="card-hover d-inline-block text-center text-decoration-none">
                            <img src="assets/img/landing/creative-agency/team/3.jpg" class="d-block rounded-1 mb-3"
                                alt="">
                            <h3 class="h5 text-white mb-1">Mr. AbdelRaouf Mohd Gharibeh</h3>
                            <p class="text-muted text-white mb-0">Jordanian lawyer</p>
                        </a>
                    </div>

                    <!-- Item -->
                    <!-- <div class="swiper-slide px-4">
                        <a href="#" class="card-hover d-inline-block text-center text-decoration-none">
                            <img src="assets/img/landing/creative-agency/team/02.jpg" class="d-block rounded-1 mb-3"
                                alt="">
                            <h3 class="h5 text-white mb-1">Michelle Yang</h3>
                            <p class="text-muted text-white mb-0">Attorney</p>
                        </a>
                    </div> -->

                    <!-- Pagination (Bullets) -->
                </div>
                <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
            </div>
        </div>
    </div>
</section>
<div class="text-center pt-4 pb-1 pb-sm-3 pb-md-4 py-lg-5 mt-2 mt-lg-0">
    <a class="btn btn-dark mb-1" href="/our-team">View all</a>
</div>
