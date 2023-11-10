@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.events') }}
@endsection
@section('content')
    <!-- Hero-->
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/our-strategy-banner-2.jpg););">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">{{ __('title.events') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" class="text-white">{{ __('title.events') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    {{-- @include('layouts.components.latest-insights.publications') --}}
@endsection
