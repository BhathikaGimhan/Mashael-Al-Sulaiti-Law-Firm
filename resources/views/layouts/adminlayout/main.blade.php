<!DOCTYPE html>
<html lang="en">

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
    <link rel="mask-icon" color="#6366f1" href="/assets/img/logo-transparent/mashael-fav-32x32.svg" />
    <meta name="msapplication-TileColor" content="#080032" />
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml" />
    <meta name="theme-color" content="white" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem("mode"),
            root = document.getElementsByTagName("html")[0];
        if (mode !== undefined && mode === "dark") {
            root.classList.add("dark-mode");
        } else {
            root.classList.remove("dark-mode");
        }
    </script>
    @yield('header_scripts')
    <!-- Page loading styles-->
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

        .shadow-dashbord {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
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
    <!-- Vendor styles-->
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}" />
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
</head>
<!-- Body-->

<body class="bg-secondary">
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
    <main class="page-wrapper">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        @include('layouts.adminlayout.header')

        <!-- Page content-->
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                @include('layouts.adminlayout.sidebar')

                <!-- Page content-->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Divider for dark mode only-->
        <hr class="d-none d-dark-mode-block" />
        <!-- Sidebar toggle button-->
        <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarAccount">
            <i class="ai-menu me-2"></i>Account menu
        </button>
    </main>
    <!-- Footer-->

    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    @yield('footer_scripts')

</body>

</html>
