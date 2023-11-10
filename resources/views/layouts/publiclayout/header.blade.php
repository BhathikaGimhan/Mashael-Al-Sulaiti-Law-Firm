<header class="bg-white fixed-top px-3 d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="my-2">
                    <a href="/" class=""><img src="{{ asset('assets/img/logo-transparent/mashael.svg') }}"
                            alt="" style="height:80px"></a>
                </div>
            </div>
            <div class="col-md-10 my-auto">
                <div class="row justify-content-end" id="topBar">
                    <div class="col-xl-8 col-lg-9 d-flex justify-content-end my-auto">
                        <div class="d-inline {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a href="mailto:info@mas.com.qa" class="text-decoration-none d-xl-block d-none"
                                style="color: #800000; font-size:14px">
                                <span
                                    class="ai-mail check-font {{ __('navbar.destopHeader.iconMargin') }}"></span>info@mas.com.qa
                            </a>
                            <a href="mailto:info@mas.com.qa" class="text-decoration-none d-md-block d-xl-none d-none"
                                style="color: #800000; font-size:14px">
                                <span class="ai-mail check-font {{ __('navbar.destopHeader.iconMargin') }}"></span>Mail
                                us
                            </a>
                        </div>
                        <div class="d-inline {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a href="tel:+97444664626" class="text-decoration-none d-xl-block d-none"
                                style="color: #800000; font-size:14px">
                                <span class="ai-phone check-font {{ __('navbar.destopHeader.iconMargin') }}">
                                </span> <span dir="ltr">{{ __('navbar.phone') }}</span>
                            </a>
                            <a href="tel:+97444664626" class="text-decoration-none d-md-block d-xl-none d-none"
                                style="color: #800000; font-size:14px">
                                <span class="ai-phone check-font {{ __('navbar.destopHeader.iconMargin') }}"></span>Call
                                us
                            </a>
                        </div>
                        <div class="d-inline {{ __('navbar.destopHeader.topBarMargin') }}" style="margin-top: -3px">
                            <a class="text-decoration-none" style="color: #800000; font-size:14px">
                                <span
                                    class="ai-clock check-font {{ __('navbar.destopHeader.iconMargin') }}"></span><span>{{ __('navbar.days') }}</span>
                                <span dir="ltr">8.00am - 17.00pm</span>
                            </a>
                        </div>
                        <div class="d-inline">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="color: #800000; font-size:14px;">
                                    {{ config('languages.' . app()->getLocale()) }}
                                </a>
                                <ul class="dropdown-menu border-0"
                                    style="width: 80px; min-width: 80px; {{ __('navbar.mob-header.lagDropAlignment') }}">
                                    @foreach (config('languages') as $key => $value)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ url('/language/' . $key) }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-flex justify-content-end">
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://www.facebook.com/profile.php?id=100092992811142" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://twitter.com/maslawfirm" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://www.linkedin.com/in/mashael-al-sulaiti-504bbaba" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://www.instagram.com/mas.legalfirm/" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://api.whatsapp.com/send?phone=97460066010" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="my-2 {{ __('navbar.destopHeader.topBarMargin') }}">
                            <a class="text-decoration-none" style="color: #800000; font-size:16px"
                                href="https://www.youtube.com/channel/UCeFI1cTR5AnhFEYGm_LJqxw" target="_blank">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="nav justify-content-end mb-1">
                        <li class="nav-item">
                            <a href="/about-us" class="nav-link px-2 px-xl-3"
                                style="color: #800000;">{{ __('navbar.about-us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/practice-areas" class="nav-link px-2 px-xl-3"
                                style="color: #800000;">{{ __('navbar.practice-areas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/our-team" class="nav-link px-2 px-xl-3"
                                style="color: #800000;">{{ __('navbar.our-team') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-3" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: #800000;">{{ __('navbar.insights') }}</a>
                            <ul class="dropdown-menu border-0"
                                style="{{ __('navbar.mob-header.lagDropAlignment') }}">
                                <li><a class="dropdown-item" href="{{ route('news-and-articles.latestNews') }}"
                                        style="color: #800000;">{{ __('navbar.newsAndArticles') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('events.latestEvent') }}"
                                        style="color: #800000;">{{ __('navbar.events') }}</a></li>
                                <li><a class="dropdown-item" href="/publications"
                                        style="color: #800000;">{{ __('navbar.publications') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/careers" class="nav-link px-2 px-xl-3" style="color: #800000;">
                                {{ __('navbar.careers') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact-us" class="nav-link px-2 px-xl-3"
                                style="color: #800000;">{{ __('navbar.contact-us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="{{ asset('assets/files/company-profile.pdf') }}"
                                class="nav-profile-btn nav-link px-2 px-xl-3">{{ __('navbar.law-firm-profile') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="navbar py-0 navbar-expand-lg bg-light fixed-top d-block d-lg-none">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('assets/img/logo-transparent/mashael.svg') }}" alt="Mashael Alsulaiti Law firm"
                class="logoImg">
        </a>
        <div class="d-flex align-items-center order-lg-2 {{ __('navbar.mob-header.iconAlignment') }}">
            <div class="contactBtns-mob">
                <a href="tel:+974 4466 4626" class="d-flex align-items-center text-decoration-none">
                    <i class="ai-phone fs-3"></i>
                    <div class="text-nowrap ps-2 d-none d-lg-block">
                        <h6 class="fs-sm lh-1 mb-0">Call us</h6>
                        <span class="fs-xs">{{ __('navbar.phone') }}</span>
                    </div>
                </a>
            </div>
            <div class="contactBtns-mob">
                <a href="mailto:info@mas.com.qa"
                    class="d-flex align-items-center text-decoration-none {{ __('navbar.mob-header.iconMargin') }}">
                    <i class="ai-messages fs-3"></i>
                    <div class="text-nowrap ps-2 d-none d-lg-block">
                        <h6 class="fs-sm lh-1 mb-0">Chat with us</h6>
                        <span class="text-body fs-xs">info@mas.com.qa</span>
                    </div>
                </a>
            </div>
        </div>

        <button type="button" class="navbar-toggler {{ __('navbar.mob-header.collapseBtn') }}"
            data-bs-toggle="collapse" data-bs-target="#navbarCollapse4">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse border-0" id="navbarCollapse4">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/about-us" class="nav-link" style="color: #800000;">{{ __('navbar.about-us') }}</a>
                </li>
                <li class="nav-item">
                    <a href="/practice-areas" class="nav-link"
                        style="color: #800000;">{{ __('navbar.practice-areas') }}</a>
                </li>
                <li class="nav-item">
                    <a href="/our-team" class="nav-link" style="color: #800000;">{{ __('navbar.our-team') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: #800000;">{{ __('navbar.insights') }}</a>
                    <ul class="dropdown-menu border-0 rounded-0"
                        style="{{ __('navbar.mob-header.lagDropAlignment') }}">
                        <li><a class="dropdown-item" href="{{ route('news-and-articles.latestNews') }}"
                                style="color: #800000;">{{ __('navbar.newsAndArticles') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('events.latestEvent') }}"
                                style="color: #800000;">{{ __('navbar.events') }}</a></li>
                        <li><a class="dropdown-item" href="/publications"
                                style="color: #800000;">{{ __('navbar.publications') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/careers" class="nav-link" style="color: #800000;">{{ __('navbar.careers') }}</a>
                </li>
                <li class="nav-item">
                    <a href="/contact-us" class="nav-link" style="color: #800000;">{{ __('navbar.contact-us') }}</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="{{ asset('assets/files/company-profile.pdf') }}" class="nav-link"
                        style="color: #800000;">{{ __('navbar.law-firm-profile') }}</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle px-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ config('languages.' . app()->getLocale()) }}</a>
                    <ul class="dropdown-menu border-0 rounded-0"
                        style="{{ __('navbar.mob-header.lagDropAlignment') }}">
                        @foreach (config('languages') as $key => $value)
                            <li><a class="dropdown-item"
                                    href="{{ url('/language/' . $key) }}">{{ $value }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
