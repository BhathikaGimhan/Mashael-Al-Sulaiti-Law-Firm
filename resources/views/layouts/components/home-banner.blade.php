<div class="swiper swiper-nav-onhover"
    data-swiper-options='{
        "spaceBetween": 20,
        "loop": true,
        "autoplay": {
            "delay": 12000,
            "disableOnInteraction": false
        },
        "effect": "fade",
        "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
        },
        "navigation": {
            "prevEl": ".btn-prev",
            "nextEl": ".btn-next"
        }
    }'>
    <div class="swiper-wrapper home-swiper-slide xxl-h-auto">
        <!-- Item -->
        <div class="swiper-slide xxl-h-auto"
            style="background-image: url('/assets/img/home-page-banners/image10.jpg'); background-repeat: no-repeat; background-size: cover">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white"
                style="background-color: rgba(0, 0, 0, 0.249);" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">
                <div class="col-lg-6 col-md-9 px-lg-md-0 px-2">
                    <h1 class="display-md-2 display-4 text-uppercase mt-0">
                        {{ __('home.heroBanner.legalexpertiseHead') }}</h1>
                    <p class="lead mt-4">{{ __('home.heroBanner.legalexpertiseDescription') }}</p>
                    <a href="/contact-us" class="btn btn-light">{!! trans('home.heroBanner.booking') !!}</a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="swiper-slide xxl-h-auto"
            style="background-image: url('/assets/img/home-page-banners/image8.jpg'); background-repeat: no-repeat; background-size: cover">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white"
                style="background-color: rgba(0, 0, 0, 0.249);" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">
                <div class="col-lg-7 col-md-9 px-lg-md-0 px-2">
                    <h1 class="display-md-2 display-4 text-uppercase mt-0">
                        {{ __('home.heroBanner.clientsatisfactionHead') }}</h1>
                    <p class="lead mt-4"> {{ __('home.heroBanner.clientsatisfactionDescription') }}</p>
                    <a href="/contact-us" class="btn btn-light">{!! trans('home.heroBanner.booking') !!}</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide"
            style="background-image: url('/assets/img/home-page-banners/home-banner-3.jpg'); background-repeat: no-repeat; background-size: cover">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white"
                style="background-color: rgba(0, 0, 0, 0.249);" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">
                <div class="col-lg-6 col-md-9 px-lg-md-0 px-2">
                    <h1 class="display-md-2 display-4 text-uppercase mt-0">
                        {{ __('home.heroBanner.confidentialityHead') }}</h1>
                    <p class="lead mt-4">{{ __('home.heroBanner.confidentialityDescription') }}</p>
                    <a href="/contact-us" class="btn btn-light">{!! trans('home.heroBanner.booking') !!}</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide"
            style="background-image: url('/assets/img/home-page-banners/home-banner-4.jpeg'); background-repeat: no-repeat; background-size: cover">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white"
                style="background-color: rgba(0, 0, 0, 0.249);" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">
                <div class="col-lg-6 col-md-9 px-lg-md-0 px-2">
                    <h1 class="display-md-2 display-4 text-uppercase mt-0">
                        {{ __('home.heroBanner.availabilityHead') }}</h1>
                    <p class="lead mt-4">{{ __('home.heroBanner.availabilityDescription') }}</p>
                    <a href="/contact-us" class="btn btn-light">{!! trans('home.heroBanner.booking') !!}</a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="swiper-slide"
            style="background-image: url('/assets/img/home-page-banners/banner-6.jpeg'); background-repeat: no-repeat; background-size: cover">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white "
                style="background-color: rgba(0, 0, 0, 0.249);" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">
                <div class="col-lg-7 col-md-9 px-lg-md-0 px-2">
                    <h1 class="display-md-2 display-4 text-uppercase mt-0">
                        {{ __('home.heroBanner.PROBONOHead') }}</h1>
                    <p class="lead mt-4">{{ __('home.heroBanner.PROBONODescription') }}</p>
                    <a href="/about-us" class="btn btn-light">{!! trans('home.heroBanner.readMore') !!}</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Prev button -->
    <button type="button" class="btn btn-prev btn-icon btn-sm btn-outline-light rounded-circle">
        <i class="ai-arrow-left"></i>
    </button>

    <!-- Next button -->
    <button type="button" class="btn btn-next btn-icon btn-sm btn-outline-light rounded-circle">
        <i class="ai-arrow-right"></i>
    </button>

    <!-- Bullets -->
    {{-- <div class="swiper-pagination"></div> --}}
</div>
