@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.aboutus') }}
@endsection
@section('content')
    <!-- Hero-->
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/about-image-1.jpg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-light">{{ __('title.aboutus') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item text-white">{{ __('title.aboutus') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 px-xxl-5">
        <div class="px-xxl-5 px-lg-5">
            <ul class="nav justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link fw-bold active" id="pills-chairman-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-chairman" type="button" role="tab" aria-controls="pills-chairman"
                        aria-selected="true">{{ __('aboutus.chairmansMessage') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link fw-bold" id="pills-history-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history"
                        aria-selected="false">{{ __('aboutus.history') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link fw-bold" id="pills-strategy-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-strategy" type="button" role="tab" aria-controls="pills-strategy"
                        aria-selected="false">{{ __('aboutus.strategy') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link fw-bold" id="pills-values-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-values" type="button" role="tab" aria-controls="pills-values"
                        aria-selected="false">{{ __('aboutus.values') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link fw-bold" id="pills-probono-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-probono" type="button" role="tab" aria-controls="pills-probono"
                        aria-selected="false">{{ __('aboutus.probono') }}</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!--=== Chairman’s Message tab content ======-->
                <div class="tab-pane fade show active" id="pills-chairman" role="tabpanel"
                    aria-labelledby="pills-chairman-tab" tabindex="0">
                    <div class="row pt-lg-5 pt-3">
                        <div class="col-md-5 zoom-effect order-lg-1 order-2">
                            <div class="zoom-effect-wrapper">
                                <img src="/assets/img/our-team/chairman.png" alt="history" class="zoom-effect-img">
                            </div>
                        </div>
                        <div class="col-md-7 px-4 mt-md-0 mt-4 ps-lg-5 order-lg-2 order-1">
                            {!! trans('aboutus.chairmansMessageContent') !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Chairman’s Message tab content end======-->

            <!--=== histroy tab content ======-->
            <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab"
                tabindex="0">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-md-5 zoom-effect">
                        <div class="zoom-effect-wrapper">
                            <img src="/assets/img/components-images/history-about-us.jpg" alt="history"
                                class="zoom-effect-img">
                        </div>
                    </div>
                    <div class="col-md-7 px-4 mt-md-0 mt-4 ps-lg-5">
                        {!! trans('aboutus.historyContent') !!}
                    </div>
                </div>
            </div>
            <!--=== history tab content end ======-->

            <!--=== strategy tab content ======-->
            <div class="tab-pane fade" id="pills-strategy" role="tabpanel" aria-labelledby="pills-strategy-tab"
                tabindex="0">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-md-5 zoom-effect">
                        <div class="zoom-effect-wrapper">
                            <img src="/assets/img/components-images/strategy-about-us.jpg" alt=""
                                class="zoom-effect-img">
                        </div>
                    </div>
                    <div class="col-md-7 px-4 mt-md-0 mt-4 ps-lg-5">
                        {!! trans('aboutus.strategyContent') !!}
                    </div>
                </div>
            </div>
            <!--=== strategy tab content end ======-->

            <!--=== values tab content ======-->
            <div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab"
                tabindex="0">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-md-5 zoom-effect">
                        <div class="zoom-effect-wrapper">
                            <img src="/assets/img/components-images/value-about-us.jpg" alt=""
                                class="zoom-effect-img w-100">
                        </div>
                    </div>
                    <div class="col-md-7 px-4 mt-md-0 mt-4 ps-lg-5">
                        {!! trans('aboutus.valuesContent') !!}
                    </div>
                </div>
            </div>
            <!--=== values tab content end ======-->

            <!--=== probono tab content ======-->
            <div class="tab-pane fade" id="pills-probono" role="tabpanel" aria-labelledby="pills-probono-tab"
                tabindex="0">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-md-5 zoom-effect">
                        <div class="zoom-effect-wrapper">
                            <img src="/assets/img/components-images/probono-about-us.jpg" alt=""
                                class="zoom-effect-img">
                        </div>
                    </div>
                    <div class="col-md-7 px-4 mt-md-0 mt-4 ps-lg-5">
                        {!! trans('aboutus.probonoContent') !!}
                    </div>
                </div>
                @include('layouts.components.probono-work')

            </div>
            <!--=== probono tab content end ======-->
        </div>
    </section>
    @include('layouts.components.our-clients')
@endsection
