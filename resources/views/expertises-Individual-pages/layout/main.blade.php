@extends('layouts.publiclayout.master')
@section('content')
    <section class="page-banner banner-overlay" @yield('area-background')>
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">@yield('area-title')</h1>
        </div>
    </section>

    <section class="container-fluid px-xxl-5 px-lg-5 py-5">
        <div class="px-xxl-5">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">{{ __('title.home') }}</a></li>
                            <li class="breadcrumb-item">
                                <a href="/practice-areas">{{ __('title.practicearea') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('area-title')</li>
                        </ol>
                    </nav>
                    <div>
                        <hr class="my-3">
                        @yield('area-content')

                    </div>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    @include('expertises-Individual-pages.layout.side-bar')
                </div>

            </div>
        </div>
    </section>
@endsection
