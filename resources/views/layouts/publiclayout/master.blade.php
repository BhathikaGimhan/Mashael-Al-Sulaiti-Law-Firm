<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description"
        content="Welcome to Mashael Alsulaiti Law Firm, a leading provider of top-tier legal services in Qatar and the international arena. Our team of accomplished professionals specializes in crafting customized solutions to address your specific legal needs. Experience the advantage of our expertise as you navigate the complexities of the legal world with confidence." />
    <meta name="keywords"
        content="lawyer, court, attorney, legal, litigation, prosecutor, common law, counsel,
    law firm, free legal advice, law firms, legal advice" />
    <meta name="author" content="" />
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/img/logo-transparent/mashael-fav-32x32.svg') }}" />
    <link rel="icon" type="image/png/svg" sizes="32x32"
        href="{{ asset('assets/img/logo-transparent/mashael-fav-32x32.svg') }}" />
    <link rel="icon" type="image/png/svg" sizes="16x16"
        href="{{ asset('assets/img/logo-transparent/mashael-fav-16x16.svg') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />
    <link rel="mask-icon" color="#6366f1" href="/assets/favicon/safari-pinned-tab.svg" />
    <meta name="msapplication-TileColor" content="#080032" />
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml" />
    <meta name="theme-color" content="white" />
    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem("mode"),
            root = document.getElementsByTagName("html")[0];
        if (mode !== undefined && mode === "dark") {
            root.classList.add("dark-mode");
        } else {
            root.classList.remove("dark-mode");
        }

        window.setTimeout(function() {
            $("#botmanWidgetRoot").children().first().css({
                'z-index': '19'
            });
        }, 6000);
    </script>
    <!-- Page loading styles-->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script>
        var botmanWidget = {
            aboutText: "{!! trans('conversation.title') !!}",
            mainColor: '#800000',
            bubbleBackground: '#fff',
            headerTextColor: '#fff',
            title: "{!! trans('conversation.title') !!}",
            introMessage: "{{ __('conversation.introMessage') }}"
        };
    </script>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    @if (app()->isLocale('ar'))
        <style>
            body {
                direction: rtl;
            }

            .dropdown-toggle::after {
                margin-right: 0 !important;
                margin-left: -0.25rem !important;
            }
        </style>
    @endif
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.4s 0.2s ease-in-out;
            transition: all 0.4s 0.2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        .dark-mode .page-loading-inner>span {
            color: #fff;
            opacity: 0.6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: 0.75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner 0.75s linear infinite;
            animation: spinner 0.75s linear infinite;
        }

        .dark-mode .page-spinner {
            background-color: rgba(255, 255, 255, 0.25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .first-sec {
            margin-top: 65px;
        }
    </style>

    @yield('styles')

    <!-- Page loading scripts-->
    <script>
        (function() {
            window.onload = function() {
                const preloader = document.querySelector(".page-loading");
                preloader.classList.remove("active");
                setTimeout(function() {
                    preloader.remove();
                }, 1500);
            };
        })();
    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"
        id="google-font" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/style.css') }}" />

    <!--circle-infographic start-->
    <link rel="stylesheet" href="/assets/circle-infographic/src/s8CyrcleInfoBox.css" media="screen" charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/assets/circle-infographic/src/s8CyrcleInfoBox.js" type="text/javascript"></script>
    <!--circle-infographic end-->

    <!-- Customizer generated styles-->
    <style id="customizer-styles"></style>
    <!-- Google Tag Manager-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-WKV3GT5");
    </script>

    <script src="https://use.fontawesome.com/aace4002de.js"></script>


    @yield('headerscripts')
</head>
<!-- Body-->

<body class="bg-secondary">س
    <!-- Google Tag Manager (noscript)-->
    {{-- <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript> --}}
    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>

    <!-- Page wrapper-->


    <main class="page-wrapper" style="background-color: #f9f9f9">
        @include('layouts.publiclayout.header')
        {{-- <div class="d-none d-lg-block" style="margin-top:95px"></div> --}}
        <div class="d-md-block d-none" style="margin-top:70px"></div>
        <div class="d-lg-none d-block" style="margin-top:10px"></div>

        <!--- ==================destop navbar =================== ---->
        {{-- @include('layouts.publiclayout.destopheader') --}}
        <!--- ==================destop navbar =================== ---->

        <!--  =================== mobile nav =================-->
        {{-- @include('layouts.publiclayout.mobileheader') --}}
        <!--  =================== mobile nav =================-->

        @yield('content')

    </main>
    <!--================== Footer =================-->
    @include('layouts.publiclayout.footer')
    <!--================== Footer =================-->

    @include('layouts.publiclayout.navsearchmodal')
    {{-- @include('layouts.publiclayout.customizerscript') --}}

    <!-- Vendor scripts: js libraries and plugins-->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/parallax-js/dist/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            var selectedLang = $(this).val();

            // if (selectedLang === 'ar') {
            //     $('body').removeClass('ltr').addClass('rtl');
            // } else if (selectedLang === 'en') {
            //     $('body').removeClass('rtl').addClass('ltr');
            // }

            window.location.href = url + "?lang=" + selectedLang;
        });

        // var url = "{{ route('changeLang') }}";

        // $(".changeLang").change(function() {
        //     var selectedLang = $(this).val();
        //     window.location.href = url + "?lang=" + selectedLang;

        //     if (selectedLang === 'en') {
        //         $('body').css('direction', 'ltr');
        //     } else if (selectedLang === 'ar') {
        //         $('body').css('direction', 'rtl');
        //     }
        // });

        window.addEventListener('scroll', fadeUpAnimation);

        window.addEventListener('load', function() {
            var fadeUps = document.querySelectorAll('.fade-up');
            for (var i = 0; i < fadeUps.length; i++) {
                fadeUps[i].classList.add('fade-up-visible');
            }
        });
    </script>
    @yield('footer_scripts')
</body>
<a class="whatsapp-button d-lg-none d-block" href="https://api.whatsapp.com/send?phone=+97460066010"
    style="z-index: 10000"><i class="ai-whatsapp"></i></a>

</html>
