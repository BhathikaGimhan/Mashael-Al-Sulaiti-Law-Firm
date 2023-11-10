<div class="row fixed-top">
    <div class="col-12 d-none d-sm-none d-md-none d-lg-block" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 my-auto">
                    <div class="d-inline" style="padding-right: 20px"><a href="mailto:info@mas.com.qa"
                            class="text-decoration-none" style="color: #800000; font-size:14px"><span
                                class="ai-mail check-font me-1"></span>info@mas.com.qa</a>
                    </div>

                    <div class="d-inline" style="padding-right: 20px"><a href="tel:+97444664626"
                            class=" text-decoration-none" style="color: #800000; font-size:14px"><span
                                class="ai-phone check-font me-1"></span>+974 4466 4626</a>
                    </div>

                    <div class="d-inline my-3" style="padding-right: 20px"><a class=" text-decoration-none"
                            style="color: #800000; font-size:14px"><span
                                class="ai-clock check-font me-1"></span>Sunday-Thursday
                            08.00am - 05.00pm</a></div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <div class="d-inline my-2" style="padding-right: 15px">
                        <a class=" text-decoration-none" style="color: #800000; font-size:20px"
                            href=" https://www.facebook.com/profile.php?id=100092992811142
                        "
                            target="blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="d-inline my-2" style="padding-right: 15px">
                        <a class=" text-decoration-none" style="color: #800000; font-size:20px"
                            href=" https://twitter.com/maslawfirm" target="blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="d-inline my-2" style="padding-right: 15px">
                        <a class=" text-decoration-none" style="color: #800000; font-size:20px"
                            href="https://www.linkedin.com/in/mashael-al-sulaiti-504bbaba" target="blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="d-inline my-2" style="padding-right: 15px">
                        <a class=" text-decoration-none" style="color: #800000; font-size:20px" href="#"
                            target="blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="d-inline my-2" style="padding-right: 15px">
                        <a class=" text-decoration-none" style="color: #800000; font-size:20px" href="#"
                            target="blank">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>

                    <a class="btn btn-lg btn-primary py-0 px-3 rounded-1 my-2"
                        href="https://api.whatsapp.com/send?phone=1234567890" target="blank">
                        <span class="fa fa-whatsapp me-2" style="font-size:20px"></span><span
                            style="font-size:14px">WhatsApp</span>
                    </a>

                </div>
            </div>
        </div>

    </div>
    <div class="col-12">
        <header class="navbar navbar-expand-lg sticky-top shadow-sm m-0 p-0">
            <div class="container-fluid m-0 p-0" style="margin-0; padding-0">
                <a href="/" class="navbar-brand m-0 py-2 px-4 px-lg-4" style="background-color:#ededed">
                    <img class="marshael-nav-logo" src="{{ asset('assets/img/logo-transparent/mashael.svg') }}"
                        alt="logo">
                </a>
                <div class="nav justify-content-end align-items-center order-lg-2 pe-lg-5">
                    {{-- <a href="#" class="nav-menu-text nav-link p-2 mx-sm-1 d-none d-lg-block">
                        Search <i class="ai-search ms-2"></i>
                    </a> --}}
                    <a class="text-light fs-4 nav-link p-2 mx-sm-1" data-bs-toggle="modal" data-bs-target="#navSearch">
                        <i class="ai-search ms-2"></i>
                    </a>
                    {{--<a type="button" class="nav-fold fs-4 text-light nav-link lang-switcher py-2 ps-3 pe-4 mt-lg-n2"
                        href="#" onclick="toggleLanguage()">
                        عربي
                    </a>--}}
                    <button type="button" class="navbar-toggler text-white ms-lg-3 ms-0 me-lg-3 me-3 mt-n1"
                        data-bs-toggle="collapse" data-bs-target="#navbarCollapse3">
                        <i class="ai-menu text-white"></i>
                    </button>
                </div>
                <nav class="collapse navbar-collapse justify-content-center border-0" id="navbarCollapse3"
                    style="background-color: #800000;">
                    <ul class="navbar-nav text-light">
                        <li><a href="/about-us" class="nav-menu-text nav-link text-light">About Us</a></li>
                        <li><a href="/areas-of-practice" class="nav-menu-text nav-link text-light">Practice Areas
                            </a>
                        </li>
                        <li><a href="/our-expertise" class="nav-menu-text nav-link text-light">Our Strategies</a></li>
                        <li><a href="/our-team" class="nav-menu-text nav-link text-light">Our Team</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle nav-menu-text text-light"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">Insights</a>
                            <ul class="dropdown-menu border-0 rounded-0" style="background-color: #800000;">
                                <li><a class="dropdown-item nav-menu-text text-light" href="#">News and
                                        Articles</a></li>
                                <li><a class="dropdown-item nav-menu-text text-light" href="#">Events</a></li>
                                {{-- <li><a class="dropdown-item nav-menu-text text-light"
                                        href="/publications">Publications</a></li>
                                <li><a class="dropdown-item nav-menu-text text-light" href="/articles">Articles</a>
                                </li>
                                <li><a class="dropdown-item nav-menu-text text-light" href="/news">News</a></li>
                                <li><a class="dropdown-item nav-menu-text text-light" href="/qatari-laws">Qatari
                                        Law</a></li>
                                <li><a class="dropdown-item nav-menu-text text-light"
                                        href="/judicial-systems">Judicial
                                        System</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-menu-text nav-link text-white" href="/join-us">Join us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-menu-text nav-link text-white" href="/contact-us">Contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</div>



{{-- <header class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('assets/img/logo-transparent/mashael.svg') }}" alt="Bootstrap" style="height: 50px;">
        </a>
        <div class="nav align-items-center order-lg-2 ms-auto">
            <a href="#" class="nav-link fs-4 p-2 mx-sm-1" style="color: #800000">
                <i class="ai-search"></i>
            </a>
            <a href="#" class="nav-link position-relative fs-4 px-2 mt-n2" style="color: #800000">
                عربي
            </a>
            <button type="button" class="navbar-toggler ms-3" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse3">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse" id="navbarCollapse3">
            <ul class="navbar-nav">
                <li><a href="/about-us" class="nav-menu-text nav-link" style="color: #800000">About Us</a></li>
                <li><a href="/areas-of-practice" class="nav-menu-text nav-link" style="color: #800000">Areas of
                        Practice</a></li>
                <li><a href="/our-expertise" class="nav-menu-text nav-link" style="color: #800000">Our Expertise</a>
                </li>
                <li><a href="/our-team" class="nav-menu-text nav-link" style="color: #800000">Our Team</a></li>
                <li class="more-nav-option nav-item">
                    <div class="dropdown">
                        <button class="dropbtn" style="color: #800000">Insight <i
                                class="ai-chevron-down ms-1"></i></button>
                        <div class="dropdown-content">
                            <a href="/publications">Publications</a>
                            <a href="/articles">Articles</a>
                            <a href="/news">News</a>
                            <a class="w-100" href="/qatari-laws">Qatari Law</a>
                            <a class="w-100" href="/judicial-systems">Judicial System</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-menu-text nav-link" href="/join-us" style="color: #800000">Join us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-menu-text nav-link" href="/contact-us" style="color: #800000">Contact us</a>
                </li>
            </ul>
        </nav>
    </div>
</header> --}}
