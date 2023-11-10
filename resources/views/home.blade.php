@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.home') }}
@endsection
@section('content')
    <!--- ========== banner home start ============= -->
    @include('layouts.components.home-banner')
    <!--- ========== banner home end ============= -->

    <!---========= about us landing start ==========--->
    @include('layouts.components.about-us')
    <!---========= about us landing end ============--->

    @include('layouts.components.our-clients')

    @include('layouts.components.awards')

    @include('layouts.components.practice-areas')

    <!--- ========= expertise start ========== --->
    {{-- @include('layouts.components.our-expertise') --}}
    <!--- ========= expertise end ========== --->

    <!--- =========== our solution start ============ --->
    @include('layouts.components.solution')
    <!--- =========== our solution start ============ --->


    @include('layouts.components.latest-insights.latest-insights-home')



    <!--- =========== core team start =========== --->

    {{-- @include('layouts.components.coreteam') --}}

    <!--- =========== core team end =========== --->

    <!--- ========= awards start ========== --->

    {{-- @include('layouts.components.awards') --}}

    {{-- @include('layouts.components.latest-insights.news')
    @include('layouts.components.latest-insights.articles')
    @include('layouts.components.latest-insights.publications') --}}
    {{-- @include('layouts.components.contact-us') --}}

    {{-- <section class="bg-secondary">
        <div class="container d-flex align-items-center pt-lg-2 pt-xl-4 pt-xxl-5 pb-3 mt-1 mt-sm-3 mb-3 my-md-4">
            <h2 class="h1 mb-0">Awards & Recognition</h2>
            <div class="d-flex ms-auto">
                <button class="btn btn-sm btn-icon btn-outline-dark rounded-circle ms-3" type="button"
                    id="prev-popular"><i class="ai-arrow-left"></i></button>
                <button class="btn btn-sm btn-icon btn-outline-dark rounded-circle ms-3" type="button"
                    id="next-popular"><i class="ai-arrow-right"></i></button>
            </div>
        </div>
        <!-- Swiper slider-->
        <div class="container-start">
            <div class="swiper"
                data-swiper-options="{
        &quot;slidesPerView&quot;: 1,
        &quot;spaceBetween&quot;: 24,
        &quot;loop&quot;: true,
        &quot;navigation&quot;: {
          &quot;prevEl&quot;: &quot;#prev-popular&quot;,
          &quot;nextEl&quot;: &quot;#next-popular&quot;
        },
        &quot;breakpoints&quot;: {
          &quot;576&quot;: {
            &quot;slidesPerView&quot;: &quot;auto&quot;
          }
        }
      }">
                <div class="swiper-wrapper">
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards03.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards04.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards03.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards04.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards03.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Item-->
                    <article class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 award-card mx-auto" style="max-width: 416px;">
                            <a href="blog-single-v.html">
                                <img class="award-card-top card-img-top" src="assets/img/awards04.jpg"
                                    alt="Post image"></a>
                            <div class="card-body">
                                <div class="">

                                    <h3 class="h3 card-title text-center">
                                        <a href="blog-single-v1.html">Top books for inspiration</a>
                                    </h3>
                                    <p class="card-text text-center">Vulputate auctor lacus imperdiet facilisi tristique
                                        nisl pulvinar porta diam duis
                                        imperdiet facilisi tristique nisl pulvinar porta diam duis auctor lacus imperdiet
                                        facilisi tristique nisl pulvinar porta diam duis...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <!-- All articles button-->
        <div class="container text-center pt-4 pb-1 pb-sm-3 pb-md-4 py-lg-5 mb-xl-1 mb-xxl-4 mt-2 mt-lg-0">
            <a class="btn btn-dark mb-1" href="blog-gride-sidebar.html">View all</a>
        </div>
    </section> --}}
    <!--- ========= awards start ========== --->
    {{-- <ul class="social-icons">
        <li><a href=" https://www.facebook.com/profile.php?id=100092992811142
            " class="facebook"
                target="_blank"><i class="ai-facebook"></i></a></li>
        <li><a href=" https://twitter.com/maslawfirm" target="_blank" class="twitter"><i class="ai-twitter"></i></a>
        </li>
        <li><a href="#" target="_blank" class="linkedin"><i class="ai-linkedin"></i></a></li>
        <li><a href="https://www.linkedin.com/in/mashael-al-sulaiti-504bbaba" target="_blank" class="instagram"><i
                    class="ai-instagram"></i></a></li>
    </ul> --}}
@endsection
@section('footer_scripts')
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>


    <!--circle-infographic scripts start-->
    <script>
        $(".circle1").s8CircleInfoBox()
    </script>
    <script>
        $(".circle2").s8CircleInfoBox({
            autoSlide: false,
            action: "click"
        })
    </script>
    <script>
        $(".circle3").s8CircleInfoBox({
            notResponsive: true,
            hoverStyle: "circleSelect3",
            slideSpeed: 500,
            breakpoint: 0

        })
    </script>
    <script>
        $(".circle4").s8CircleInfoBox({
            hoverStyle: "circleSelect4",
            spreadStyle: "right"
        })
    </script>
    <script>
        $(".circle5").s8CircleInfoBox({
            hoverStyle: "circleSelect4",
            spreadStyle: "left"
        })
    </script>
    <script>
        $(".circle6").s8CircleInfoBox({
            hoverStyle: "circleSelect4",
            spreadStyle: "top"
        })
    </script>
    <script>
        $(".circle7").s8CircleInfoBox({
            hoverStyle: "circleSelect4",
            spreadStyle: "bottom"
        })
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-1VDDWMRSTH');
    </script>
    <script>
        try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                method: 'HEAD',
                mode: 'no-cors'
            })).then(function(response) {
                return true;
            }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
        } catch (error) {
            console.log(error);
        }
    </script>
    <!--circle-infographic scripts end-->
@endsection
