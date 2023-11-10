<section class="pt-5 pb-lg-5 px-xxl-5">
    <div class="container-fluid px-xxl-5 px-lg-5">
        <div class="row bg-white py-3" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <div class="col-lg-7 zoom-effect">
                <div class="position-relative zoom-effect-wrapper">
                    <img src="/assets/img/about-image-1.jpg" alt="AboutUs" class="zoom-effect-img w-100">
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="mt-md-0 mt-4 px-3">
                    <div class="title-top-bar mt-lg-0 mt-5"></div>
                    {{-- <p class="fw-bold fs-lg mb-3 mt-4">LAW FIRM</p> --}}
                    <h1 class="logo-red mb-4 mt-0">{{ __('title.aboutus') }}</h1>
                    <div class="">{!! trans('home.aboutUs.content') !!}</div>
                    <div class="mt-5">
                        <a href="/about-us" class="read-more-text-btn">{!! trans('buttons.readMore') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
