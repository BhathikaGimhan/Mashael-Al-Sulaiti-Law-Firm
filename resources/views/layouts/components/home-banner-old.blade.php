<section class="position-relative py-5">
    <div class="binded-content position-absolute top-0 start-0 w-100">
        <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center active"
            id="bg-1"
            style="
                background: linear-gradient(
                        270deg,
                        rgba(120, 6, 6, 0) 0%,
                        rgba(0, 0, 0, 0) 100%
                    ),
                    url(/assets/img/banner-6.jpeg);
            ">
        </div>
        <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center"
            id="bg-2"
            style="
                background-image: linear-gradient(
                    270deg,
                        rgba(120, 6, 6, 0) 0%,
                        rgba(0, 0, 0, 0) 100%
                    ),
                    url(/assets/img/home-page-banners/home-banner-3.jpg);
            ">
        </div>
        <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center"
            id="bg-3"
            style="
                background-image: linear-gradient(
                    270deg,
                        rgba(120, 6, 6, 0) 0%,
                        rgba(0, 0, 0, 0) 100%
                    ),
                    url(/assets/img/image8.jpg);
            ">
        </div>
        <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center"
            id="bg-4"
            style="
                background-image: linear-gradient(
                    270deg,
                        rgba(120, 6, 6, 0.479) 0%,
                        rgba(0, 0, 0, 0.724) 100%
                    ),
                    url(/assets/img/image10.jpg);
            ">
        </div>
        <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center"
            id="bg-5"
            style="
                background-image: linear-gradient(
                    270deg,
                        rgba(120, 6, 6, 0) 0%,
                        rgba(0, 0, 0, 0) 100%
                    ),
                    url(/assets/img/banner-5.jpeg);
            ">
        </div>
    </div>
    <div class="container py-2 py-sm-4 py-lg-5 my-md-3 my-lg-0 my-xl-3 my-xxl-4">
        <div class="row align-items-center my-xxl-2">
            <div class="col-md-8 position-relative zindex-2 mb-5 mb-md-0">
                <div>
                    <!-- Swiper slider-->
                    <div class="swiper py-5"
                        data-swiper-options='{
                        "spaceBetween": 40,
                        "loop": true,
                        "bindedContent": true,
                        "controlledSlider": "#cards",
                        "navigation": {
                            "prevEl": "#prev-collection",
                            "nextEl": "#next-collection"
                        },
                        "autoplay": {
                            "delay": 7000,
                            "disableOnInteraction": false
                        }
                    }'>
                        <div class="swiper-wrapper py-4">
                            <!-- === Silde-content 1 == -->
                            <div class="swiper-slide" data-swiper-binded="#bg-1">
                                <div class="px-3 pt-3 pb-1">
                                    <h2 class="display-5 text-white text-uppercase mb-md-4 mb-xl-5">
                                        YOUR ADVOCATE FOR<br>LIFE'S LEGAL CHALLENGES
                                    </h2>
                                </div>
                                {{-- <a class="btn btn-outline-light" href="shop-catalog.html">Explore all sets</a> --}}
                            </div>
                            <!-- === Silde-content 2 == -->
                            <div class="swiper-slide" data-swiper-binded="#bg-2">
                                <div class="px-3 pt-3 pb-1">

                                    <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">
                                        Defending your rights, protecting your interests
                                    </h2>
                                </div>
                                {{-- <a class="btn btn-outline-light" href="shop-catalog.html">Explore all sets</a> --}}
                            </div>
                            <!-- === Silde-content 3 == -->
                            <div class="swiper-slide" data-swiper-binded="#bg-3">
                                <div class="px-3 pt-3 pb-1">
                                    <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">
                                        EXPERIENCE<br>COMPASSION<br>RESULTS
                                    </h2>
                                </div>
                                {{-- <a class="btn btn-outline-light" href="shop-catalog.html">Explore all sets</a> --}}
                            </div>
                            <!-- === Silde-content 4 == -->
                            <div class="swiper-slide" data-swiper-binded="#bg-4">
                                <div class="px-3 pt-3 pb-1">
                                    <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">
                                        YOUR LEGAL PARTNER FOR<br class="d-none d-lg-block">EVERY STEP OF THE WAY
                                    </h2>
                                </div>
                                {{-- <a class="btn btn-outline-light" href="shop-catalog.html">Explore all sets</a> --}}
                            </div>
                            <!-- === Silde-content 5 == -->
                            <div class="swiper-slide" data-swiper-binded="#bg-5">
                                <div class="px-3 pt-3 pb-1">
                                    <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">
                                        DEDICATED TO ACHIEVING YOUR<br>LEGAL GOALS
                                    </h2>
                                </div>
                                {{-- <a class="btn btn-outline-light" href="shop-catalog.html">Explore all sets</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                <div class="ps-md-4 ps-lg-0">
                    <div class="swiper" id="cards"
                        data-swiper-options='{
      "allowTouchMove": false,
      "spaceBetween": 40,
      "loop": true
    }'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
