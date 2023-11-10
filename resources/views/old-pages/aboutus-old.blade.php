@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | About Us')
@section('content')


    <!-- Hero-->
    <div class="section" style="background-image: url(/assets/img/about-image-1.jpg);">
        <div class="py-5" style="background-color: #8d8f924d;">
            <div class="d-flex flex-column align-items-center py-5" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">

                <h1 class="text-white">
                    About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- About-->
    <section class="container position-relative zindex-3">
        {{-- <div class="rounded-5 overflow-hidden">
            <div class="jarallax ratio ratio-16x9" data-jarallax data-speed="0.6">
                <div class="jarallax-img" style="background-image: url(assets/img/about/agency/parallax-image.jpg);"></div>
            </div>
        </div> --}}
        <div class="row pt-5 mt-n2 mt-sm-0 mt-md-2 mt-lg-4 mt-xl-5">
            <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="fs-sm text-uppercase mb-3">What we do</div>
                <h2 class="display-6">We are a team that provides top-notch legal services.</h2>
                <div class="mt-4">
                    <a href="/contact-us" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5" data-aos="fade-up"
                data-aos-duration="900" data-aos-offset="180" data-disable-parallax-down="md">
                <p class="fs-xl">Welcome to <strong>Al Sulaiti Law Firm</strong> , a leading light in the provision of
                    top-notch
                    legal services, where trust, expertise, and client satisfaction are our guiding principles.</p>
                <p class="fs-xl mb-0">Our firm, established with the belief that every client deserves the best
                    representation, has rapidly grown over the years, earning a reputation for exceptional service, marked
                    by integrity, dedication, and success.</p>
            </div>
        </div>
    </section>
    <!-- Approach-->
    <section class="py-5 mt-md-2 mt-xl-4 mt-xxl-5 bg-white">
        <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
            {{-- <div class="fs-sm text-uppercase mb-3">Our Mission</div> --}}
            {{-- <h2 class="display-6 pb-3 mb-lg-4">Professional approach </h2> --}}
            {{-- <h1 class="mb-5">Our Mission</h1> --}}
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <img src="/assets/img/mission.png" alt="" class="w-100">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="mt-md-0 mt-3 px-3" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                        data-disable-parallax-down="md">
                        <h1 class="text-center mb-3">Our Mission</h1>
                        <h4 class="text-center">" We are committed to delivering exceptional legal services to our clients,
                            focusing on
                            integrity, advocacy, and understanding. Our mission is to create a distinctive, client-focused
                            legal
                            practice, providing personalized services that meet and exceed the needs of our clients,
                            ensuring
                            the best possible outcomes. "</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="py-5" style="background-color: rgba(155, 150, 150, 0.112)">
        <div class="container">
            <h1 class="mb-5">Our Achievements</h1>
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <img src="/assets/img/achievements-mashael.jpg" alt="" class="w-100">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="px-3 mt-md-0 mt-3" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
                        data-disable-parallax-down="md">
                        <p class="fs-lg">Throughout our history, we have marked numerous successes, both in terms of the
                            cases
                            we
                            have
                            won and the recognition we have received in the legal community. We are proud of the trust our
                            clients
                            place
                            in us, reflected in their testimonials and our consistently high client satisfaction ratings.
                            Our
                            expertise
                            and innovative approach have seen us celebrated as pioneers in the legal field, always pushing
                            boundaries
                            and setting new standards.
                        </p>
                        <p class="fs-lg">Together, these pillars of our identity define us, making us more than just a
                            legal
                            firm.
                            We
                            are a dedicated team of professionals, fiercely committed to serving our clients, advocating for
                            their
                            rights, and achieving the best possible outcomes. We look forward to serving you and
                            demonstrating
                            why
                            we
                            are a leader in the legal industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden" style="background-color: #800000">
        <div class="container pb-5 pt-3 pt-md-4 pt-lg-5 my-xl-3 my-xxl-5">
            <h1 class="text-light">Our Values</h1>
            {{-- <div class="row pb-md-3 pb-lg-4 mb-2 mb-lg-3"> --}}
            <!-- CEO quote-->
            {{-- <div class="col-md-5 d-flex flex-column align-items-center mb-4 mb-md-0"> --}}
            {{-- <div class="position-relative" style="max-width: 416px">
                        <img class="d-block position-relative zindex-2"
                            src="assets/img/landing/business-consulting/ceo.png" alt="Nicolas Black" />
                        <div class="bg-primary position-absolute start-0 bottom-0 w-100"
                            style="
                                height: 85.4%;
                                border-radius: 2.25rem 8rem 2.25rem
                                    2.25rem;
                            ">
                        </div>
                    </div>
                    <div class="text-center text-md-start pt-3 mt-3">
                        <h2 class="mb-2">Nicolas Black</h2>
                        <p class="fs-xl text-muted mb-2">
                            CEO Around Group
                        </p>
                        <div class="position-relative pt-4" style="max-width: 500px">
                            <div class="position-absolute top-0 start-0 w-100 text-center text-md-start ms-md-1">
                                <svg class="text-border" width="155" height="111" viewBox="0 0 155 111"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M125.969 38.7937C129.372 30.2345 134.734 21.7781 141.902 13.6311C144.17 11.053 144.48 7.34066 142.623 4.45316C141.18 2.18441 138.808 0.94696 136.23 0.94696C135.508 0.94696 134.786 0.99826 134.064 1.25633C118.905 5.69065 83.4811 21.4171 82.5014 71.8454C82.1407 91.2842 96.3717 107.99 114.883 109.898C125.144 110.93 135.353 107.578 142.933 100.772C150.512 93.914 154.844 84.117 154.844 73.9077C154.844 56.8922 142.778 41.9905 125.969 38.7937Z">
                                    </path>
                                    <path
                                        d="M32.5904 109.898C42.7999 110.93 53.0092 107.578 60.5888 100.772C68.1686 93.914 72.5 84.117 72.5 73.9077C72.5 56.8922 60.4342 41.9905 43.6248 38.7937C47.0281 30.2345 52.3905 21.7781 59.5578 13.6312C61.8265 11.0531 62.1359 7.34071 60.2794 4.45321C58.8358 2.18446 56.4638 0.947006 53.8857 0.947006C53.1641 0.947006 52.4421 0.998306 51.7202 1.25638C36.5608 5.6907 1.13734 21.4172 0.157654 71.8454V72.5671C0.157654 91.6968 14.2341 107.99 32.5904 109.898Z">
                                    </path>
                                </svg>
                            </div>
                            <p class="fs-xl position-relative zindex-2 mb-0">
                                The main task of our organization is
                                <strong>to assess the state of your
                                    enterprise now and how you can
                                    achieve your goals.</strong>
                                Self-assessment of current activities
                                and review of processes formulate
                                decisions to achieve the desired
                                outcome.
                            </p>
                        </div>
                    </div> --}}
            {{-- </div> --}}
            <!-- Steps-->
            {{-- <div class="row">
                <div class="ps-md-4 ps-lg-0">
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                01
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Transparency
                                    </h3>
                                    <p class="card-text">
                                        We believe in the power of honesty and openness, fostering a culture of trust
                                        with
                                        our clients. We are forthright about our processes, keeping our clients informed
                                        every step of the way.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back" data-aos-delay="250">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                02
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Confidentiality
                                    </h3>
                                    <p class="card-text">
                                        Upholding the sacred principle of the legal profession, we ensure our clients'
                                        information is always secure. Our robust confidentiality measures are designed
                                        to
                                        safeguard our clients' rights and interests.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back" data-aos-delay="500">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                03
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Client Satisfaction
                                    </h3>
                                    <p class="card-text">
                                        At the heart of our practice, client satisfaction guides our actions. We
                                        maintain
                                        excellent communication and deliver personalized attention to each client,
                                        adapting
                                        to individual needs and ensuring that we not only meet but exceed expectations.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back" data-aos-delay="700">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                04
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Legal Expertise
                                    </h3>
                                    <p class="card-text">
                                        Our firm boasts an impressive team of seasoned legal professionals, each with
                                        expertise in specific areas of law. This specialization allows us to provide our
                                        clients with comprehensive, high-quality legal advice and representation.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back" data-aos-delay="900">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                05
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Technological Innovation
                                    </h3>
                                    <p class="card-text">
                                        We harness the power of modern technology to enhance our services. Leveraging
                                        artificial intelligence and machine learning, we automate routine tasks,
                                        increase
                                        efficiency, and stay at the forefront of the legal industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                            data-aos-easing="ease-out-back" data-aos-delay="1100">
                            <div
                                class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y zindex-2 pe-none">
                                06
                            </div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                                <div class="card-body ps-4">
                                    <h3 class="h5 card-title pb-2 mb-1">
                                        Availability
                                    </h3>
                                    <p class="card-text">
                                        We understand that legal concerns can arise at any time. Therefore, our firm is
                                        committed to being available and responsive to our clients' needs, ensuring
                                        timely
                                        advice and assistance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- </div> --}}
            <div class="row">
                {{-- <div class="ps-md-4 ps-lg-0"> --}}
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title pb-2 text-center mb-1">
                                    Transparency
                                </h3>
                                <p class="card-text text-center">
                                    We believe in the power of honesty and openness, fostering a culture of trust
                                    with
                                    our clients. We are forthright about our processes, keeping our clients informed
                                    every step of the way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back" data-aos-delay="250">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title text-center pb-2 mb-1">
                                    Confidentiality
                                </h3>
                                <p class="card-text text-center">
                                    Upholding the sacred principle of the legal profession, we ensure our clients'
                                    information is always secure. Our robust confidentiality measures are designed
                                    to
                                    safeguard our clients' rights and interests.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back" data-aos-delay="500">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title text-center pb-2 mb-1">
                                    Client Satisfaction
                                </h3>
                                <p class="card-text text-center">
                                    At the heart of our practice, client satisfaction guides our actions. We
                                    maintain
                                    excellent communication and deliver personalized attention to each client,
                                    adapting
                                    to individual needs and ensuring that we not only meet but exceed expectations.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back" data-aos-delay="700">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title text-center pb-2 mb-1">
                                    Legal Expertise
                                </h3>
                                <p class="card-text text-center">
                                    Our firm boasts an impressive team of seasoned legal professionals, each with
                                    expertise in specific areas of law. This specialization allows us to provide our
                                    clients with comprehensive, high-quality legal advice and representation.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back" data-aos-delay="900">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title text-center pb-2 mb-1">
                                    Technological Innovation
                                </h3>
                                <p class="card-text text-center">
                                    We harness the power of modern technology to enhance our services. Leveraging
                                    artificial intelligence and machine learning, we automate routine tasks,
                                    increase
                                    efficiency, and stay at the forefront of the legal industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                        data-aos-easing="ease-out-back" data-aos-delay="1100">
                        <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem)">
                            <div class="card-body ps-4">
                                <h3 class="h5 card-title text-center pb-2 mb-1">
                                    Availability
                                </h3>
                                <p class="card-text text-center">
                                    We understand that legal concerns can arise at any time. Therefore, our firm is
                                    committed to being available and responsive to our clients' needs, ensuring
                                    timely
                                    advice and assistance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- How we work (Steps)-->
    {{-- <section class="container py-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
                <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto"
                    style="max-width: 530px; background-image: url(assets/img/about/agency/steps-image.jpg);">
                    <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                    <div class="dark-mode position-relative zindex-2 p-4">
                        <div class="text-center mx-auto" style="max-width: 275px;"><span
                                class="d-block fs-sm text-uppercase mb-3">How we work</span>
                            <h2 class="display-6 mb-0">The key to success</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 ps-xl-0">
                    <div class="steps steps-hoverable">
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">01</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Formulation of the problem</h3>
                                <p class="mb-0">Find aute irure dolor in reprehenderi voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur am luctus.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">02</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Assessment of the current state</h3>
                                <p class="mb-0">Risus quam quis at euismod vitae dui elementu eu in diam malesuada mattis
                                    ut urna integer erat nisi nibh.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">03</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Business plan creation</h3>
                                <p class="mb-0">A sagittis morbi massa venenatis, egestas viverra ac elit nibh tellus
                                    nisi in nec tellus mauris feugiat gravida.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">04</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Strategy implementation</h3>
                                <p class="mb-0">Elementum purus, nisl ipsum sit. Amet sit praesent proin sit cras. Leo
                                    sed praesent nunc vel nec risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Team-->

    @include('layouts.components.coreteam')

    <!--- =========== core team end =========== --->

    <!--- ========= awards start ========== --->

    {{-- @include('layouts.components.awards') --}}

    {{-- <section class="pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="fs-sm text-uppercase mb-3">Testimonials</div>
            <h2 class="display-6 pb-3 mb-lg-4">What our clients say</h2>
            <div class="card border-0 bg-secondary overflow-hidden">
                <div class="card-body position-relative zindex-2 px-lg-0 py-lg-5">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <!-- Binded items-->
                            <div class="binded-content">
                                <!-- Item-->
                                <div class="binded-item active" id="author1"><img class="d-block rounded-circle mb-3"
                                        src="assets/img/avatar/21.jpg" width="86" alt="Lilianna Bocouse">
                                    <h4 class="mb-0">Lilianna Bocouse</h4>
                                    <p class="fs-lg text-muted mb-0">Head of Marketing</p>
                                </div>
                                <!-- Item-->
                                <div class="binded-item" id="author2"><img class="d-block rounded-circle mb-3"
                                        src="assets/img/avatar/33.jpg" width="86" alt="Darell Steward">
                                    <h4 class="mb-0">Darell Steward</h4>
                                    <p class="fs-lg text-muted mb-0">Project Manager</p>
                                </div>
                                <!-- Item-->
                                <div class="binded-item" id="author3"><img class="d-block rounded-circle mb-3"
                                        src="assets/img/avatar/34.jpg" width="86" alt="Annette Black">
                                    <h4 class="mb-0">Annette Black</h4>
                                    <p class="fs-lg text-muted mb-0">Lead Designer</p>
                                </div>
                                <!-- Item-->
                                <div class="binded-item" id="author4"><img class="d-block rounded-circle mb-3"
                                        src="assets/img/avatar/35.jpg" width="86" alt="Ralph Edwards">
                                    <h4 class="mb-0">Ralph Edwards</h4>
                                    <p class="fs-lg text-muted mb-0">CEO, Co-Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <!-- Swiper slider-->
                            <div class="swiper"
                                data-swiper-options="{
                  &quot;spaceBetween&quot;: 40,
                  &quot;loop&quot;: true,
                  &quot;autoHeight&quot;: true,
                  &quot;bindedContent&quot;: true,
                  &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;#testimonials-bullets&quot;,
                    &quot;clickable&quot;: true
                  }
                }">
                                <div class="swiper-wrapper">
                                    <!-- Item-->
                                    <div class="swiper-slide" data-swiper-binded="#author1">
                                        <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate
                                            data we need to make strategic decisions. All tools are constantly being
                                            improved and contain a lot of useful and interesting information. Thanks to
                                            Around, we can constantly analyze our big data quickly and efficiently.”</p>
                                    </div>
                                    <!-- Item-->
                                    <div class="swiper-slide" data-swiper-binded="#author2">
                                        <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio
                                            efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor
                                            ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec
                                            ligula dictum maximus eu ut ante.”</p>
                                    </div>
                                    <!-- Item-->
                                    <div class="swiper-slide" data-swiper-binded="#author3">
                                        <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique.
                                            Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas,
                                            mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec
                                            ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”
                                        </p>
                                    </div>
                                    <!-- Item-->
                                    <div class="swiper-slide" data-swiper-binded="#author4">
                                        <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra,
                                            quis semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur
                                            elementum turpis at ipsum molestie, id maximus odio tincidunt. Praesent id
                                            lacinia orci. Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus
                                            quis lacus placerat fringilla.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper pagination (bullets)-->
            <div class="swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3" id="testimonials-bullets"></div>
        </div>
    </section> --}}
    <!-- Gallery (Carousel)-->
    {{-- <section class="position-relative py-5 mt-2 mt-xl-4 mt-xxl-5">
        <div class="bg-secondary position-absolute start-0 bottom-0 w-100" style="height: 252px;"></div>
        <div class="container py-3 pt-sm-4 pt-lg-5 mt-xl-2 mt-xxl-3 mb-3 mb-lg-4">
            <div class="fs-sm text-uppercase mb-3">Where</div>
            <div class="d-sm-flex align-items-center justify-content-between">
                <h2 class="display-6 mb-0 me-sm-4">We are located in Qatar</h2>
                <!-- Swiper controls (Prev/next buttons) visible on screens > 576px-->
                <div class="d-none d-sm-flex">
                    <button class="prev-gallery btn btn-icon btn-outline-primary rounded-circle me-3" type="button"><i
                            class="ai-arrow-left"></i></button>
                    <button class="next-gallery btn btn-icon btn-outline-primary rounded-circle" type="button"><i
                            class="ai-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- Swiper slider-->
        <div class="container-start position-relative zindex-2 pe-0">
            <div class="swiper"
                data-swiper-options="{
        &quot;slidesPerView&quot;: &quot;auto&quot;,
        &quot;spaceBetween&quot;: 24,
        &quot;loop&quot;: true,
        &quot;navigation&quot;: {
          &quot;prevEl&quot;: &quot;.prev-gallery&quot;,
          &quot;nextEl&quot;: &quot;.next-gallery&quot;
        }
      }">
                <div class="swiper-wrapper gallery align-items-end">
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/01.jpg" style="max-width: 416px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/01.jpg"
                                        alt="Gallery image #1"></div>
                            </div>
                        </a></div>
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/02.jpg" style="max-width: 526px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/02.jpg"
                                        alt="Gallery image #2"></div>
                            </div>
                        </a></div>
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/03.jpg" style="max-width: 306px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/03.jpg"
                                        alt="Gallery image #3"></div>
                            </div>
                        </a></div>
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/04.jpg" style="max-width: 367px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/04.jpg"
                                        alt="Gallery image #4"></div>
                            </div>
                        </a></div>
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/05.jpg" style="max-width: 526px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/05.jpg"
                                        alt="Gallery image #5"></div>
                            </div>
                        </a></div>
                    <!-- Item-->
                    <div class="swiper-slide w-auto"><a class="d-block gallery-item card-hover zoom-effect"
                            href="assets/img/about/agency/gallery/06.jpg" style="max-width: 416px;">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden zindex-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img"><img src="assets/img/about/agency/gallery/06.jpg"
                                        alt="Gallery image #6"></div>
                            </div>
                        </a></div>
                </div>
            </div>
            <!-- Swiper controls (Prev/next buttons) visible on screens < 576px-->
            <div class="d-flex d-sm-none pt-4">
                <button class="prev-gallery btn btn-icon btn-outline-primary rounded-circle me-3" type="button"><i
                        class="ai-arrow-left"></i></button>
                <button class="next-gallery btn btn-icon btn-outline-primary rounded-circle" type="button"><i
                        class="ai-arrow-right"></i></button>
            </div>
        </div>
    </section> --}}
@endsection
