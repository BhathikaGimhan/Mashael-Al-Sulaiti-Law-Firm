<!--- destop navbar start ---->
<div class="main-nav fixed-top d-none d-lg-block">
    <nav class="navbar navbar-expand-lg lang-switch fixed-top" style="background-color: #fafafa;">
        <div class="container-fluid">
            <div class="me-auto">
                <ul class="navbar-nav nav-text-topnav-left">
                    <li class="nav-item lang-switcher mt-n1" style="width: 43px;">

                        {{--<a class="top-nav-link lang-switch-btn topnav-hide-link" href="#"
                            onclick="toggleLanguage()">عربي</a>--}}
                        <!-- <div class="d-flex">
                <a
                  class="top-nav-link lang-switch-btn topnav-hide-link"
                  aria-current="page"
                  href="#"
                >
                  <span class="d-none d-lg-block">English</span>
                  <span class="d-block d-lg-none">English</span>
                </a>
                <span class="top-nav-text mx-2 topnav-hide-link">|</span>
                <a
                  class="top-nav-link lang-switch-btn topnav-hide-link"
                  aria-current="page"
                  href="#"
                >
                  <span class="d-none d-lg-block">English</span>
                  <span class="d-block d-lg-none">English</span>
                </a>
              </div> -->
                    </li>
                    <!-- <li class="nav-item">
              <a class="top-nav-link top-nav-link-left top-nav-link-right topnav-hide-link"
                >Provider/Privacy</a
              >
            </li> -->
                </ul>
            </div>--}}
            <a href="/">
                <img src="{{ asset('assets/img/logo-transparent/mashael.svg') }}" alt="Mashael Alsulaiti Law Firm"
                    style="height: 60px;" />
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav nav-text-topnav-right">
                    <li class="nav-item">
                        <a class="top-nav-link top-nav-link-right topnav-hide-link" data-bs-toggle="modal"
                            data-bs-target="#navSearch" onclick="hideNav()">Search <i class="ai-search"></i></a>
                    </li>
                    <!-- <li class="nav-item">
              <a class="top-nav-link top-nav-link-right topnav-hide-link"
                >Login <i class="ai-chevron-down"></i
              ></a>
            </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 77px;">
    </nav>
    <div class="nav-links-bar-bottom">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/about-us">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/areas-of-practice">Areas of Practice</a>
            </li>
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/our-expertise">Our Expertise</a>
            </li>
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/our-team">Our Team</a>
            </li>
            <li class="more-nav-option nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Insight <i class="ai-chevron-down ms-1"></i></button>
                    <div class="dropdown-content">
                        <a href="/publications">Publications</a>
                        <a href="/articles">Articles</a>
                        <a href="/news">News</a>
                        <a class="w-100" href="/qatari-laws">Qatari Law</a>
                        <a class="w-100" href="/judicial-systems">Judicial System</a>

                    </div>
                </div>
                <!-- <a class="nav-menu-text nav-link text-white">Our Attorneys</a> -->
                <!-- <div class="dropdown">
            <a
              class="nav-menu-text nav-link text-white dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Insight
            </a>
            <ul class="nav-menu-text dropdown-menu">
              <li><a class="dropdown-item" href="#">Publications</a></li>
              <li><a class="dropdown-item" href="#">Articles</a></li>
              <li>
                <a class="dropdown-item" href="#"
                  >Qatari Law & Judicial System</a
                >
              </li>
            </ul>
          </div> -->
            </li>
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/join-us">Join us</a>
            </li>
            <li class="nav-item">
                <a class="nav-menu-text nav-link text-white" href="/contact-us">Contact us</a>
            </li>
        </ul>
    </div>
</div>
<!-- destop navbar end-->
