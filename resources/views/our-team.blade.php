@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.ourTeam') }}
@endsection
@section('styles')
    <style>
        .about-page-banner {
            background: url(/assets/img/our-team/banner-white-bg.png);
            height: 500px !important;
        }

        @media (max-width: 768px) {
            .about-page-banner {
                /* background: url(/assets/img/our-team/banner-bg-mobile.png); */
                height: 400px !important;
            }
        }
    </style>
@endsection
@section('content')
    <section class="about-page-banner  about-banner-overlay">
        <div class="banner-overlay-content mt-lg-1 mt-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2" style="color: #a1a1a1">{{ __('title.ourTeam') }}</h1>
            <div class="d-flex justify-content-center our-team">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a style="color: #a1a1a1" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" style="color: #a1a1a1">{{ __('title.ourTeam') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="py-5 px-xxl-5">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <h1 class="text-dark text-center fw-bold">{{ __('title.meetOurTeam') }}</h1>
            <div class="row mt-5">
                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/ms-mashael-mohammad-alsulaiti" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/chairman.png" class="zoom-effect-img card-img-top rounded-0"
                                    alt="Ms. Mashael Mohammad Alsulaiti">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.founder.name') }}</h4>
                                <p class="text-center mt-0">{{ __('ourTeam.teamMembers.founder.designation') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-monir-abdulAziz-shalaby" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Monir-AbdulAziz-Shalaby.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Monir AbdulAziz Shalaby">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.shalaby.name') }}
                                </h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.shalaby.designation') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-yasser-assed-yousef-mohammad" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 bg-white p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Yasser-Assed-Yousef-Mohammad.jpg"
                                    class="zoom-effect-img card-img-top rounded-0 bg-white"
                                    alt="Mr. Yasser Assed Yousef Mohammad">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.mohammad.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.mohammad.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-abdelRaouf-mohd-gharibeh" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-AbdelRaouf-Mohd-Gharibeh.jpg"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. AbdelRaouf Mohd Gharibeh">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.gharibeh.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.gharibeh.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-mohamed-ibrahim" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Mohamed-Ibrahim.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Mohamed Ibrahim">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.ibrahim.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.ibrahim.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/ms-soha-dammak" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Ms-Soha-Dammak.jpg"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Ms. Soha Dammak">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.soha.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.soha.designation') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Ahmed-Said.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Ahmed Said">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.said.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.said.designation') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-sherif-abdel-galil-neam" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Sharif-Abdel-Galil.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Sharif Abdel Galil">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.galil.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.galil.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Abdulla-Jumah.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Abdulla Jumah">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.abdulla.name') }}</h4>
                                <p class="card-text text-center mt-0">{{ __('ourTeam.teamMembers.abdulla.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="/our-team/mr-emil-sebastian" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Emil-Sebastian.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Emil Sebastian">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.sebastian.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.sebastian.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-abdullah-Bin-Mhod-Al-Sulaiti.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Abdullah Bin Mohd Al Sulaiti">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.abdullah.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.abdullah.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Ms-Akanksha-Mohapatra.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Ms. Akanksha Mohapatra">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.akanksha.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.akanksha.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Rami.png" class="zoom-effect-img card-img-top rounded-0"
                                    alt="Mr. Rami">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.rami.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.rami.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Ms-Chaimaa-Marref.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Ms. Chaimaa Marref">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.chaimaa.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.chaimaa.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-lg-5 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-effect rounded-0 shadow-sm h-100 p-4">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/Mr-Rilshan-Mohamed.png"
                                    class="zoom-effect-img card-img-top rounded-0" alt="Mr. Rilshan Mohamed">
                            </div>
                            <div class="text-dark">
                                <h4 class="h5 text-center mt-4 mb-2">{{ __('ourTeam.teamMembers.rilshan.name') }}</h4>
                                <p class="card-text text-center mt-0">
                                    {{ __('ourTeam.teamMembers.rilshan.designation') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 px-xxl-5" style="background-color: #a791050e">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="logo-red fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.founderOwner') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.founderOwner') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="logo-red fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.ourLegalTeam') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.ourLegalTeam') }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.seniorAssociates') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.seniorAssociates') }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="logo-red fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.associates') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.associates') }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="logo-red fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.paralegals') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.paralegals') }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <div class="px-5">
                        <h1 class="logo-red fs-lg fw-bold text-dark mb-0">{{ __('ourTeam.headings.supportStaff') }}</h1>
                        <hr class="me-4 my-1" style="border-top: 2px black solid;">
                        <p class="fs-lg text-dark">{{ __('ourTeam.description.supportStaff') }}</p>
                    </div>
                </div>
                <div class="px-5" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                    data-disable-parallax-down="md">
                    <p class="fs-lg text-dark fw-bold">{{ __('ourTeam.headings.endDescription') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
