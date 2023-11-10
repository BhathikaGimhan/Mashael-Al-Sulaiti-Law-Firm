@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.news') }}
@endsection
@section('content')
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/banners/pages-banners/news.jpg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">{{ __('title.news') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" class="text-white">{{ __('title.news') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="container-fluid px-xxl-5 py-5">
        <div class="px-xxl-5 px-lg-5">
            <div class="row">
                @forelse ($news as $newsDetails)
                    <!--- card --->
                    <div class="col-md-6 col-lg-4"
                        dir="{{ $news->lang_type }}>
                        <a style="text-decoration: none;"
                        href="/news/{{ $newsDetails->slug }}">
                        <div class="card zoom-effect shadow-sm mb-5" style="border-radius: 4px;">
                            <div class="zoom-effect-wrapper">
                                <img src="{{ $newsDetails->image ?? asset('assets/img/blog/grid/01.jpg') }}"
                                    class="zoom-effect-img card-top-img w-100" alt="Card image"
                                    style="border-radius: 4px 4px 0px 0px; height:250px;">
                            </div>
                            <div class="card-body p-4">
                                <p class="fs-lg text-dark fw-bold text-capitalize title-max-lines mt-0">
                                    {{ $newsDetails->title }}</p>
                                <p class="card-text max-lines mb-3 text-dark">{{ $newsDetails->description }}</p>
                                <p class="text-dark" style="font-size: 13px; font-weight:400"><span
                                        class="me-2">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $newsDetails->created_at)->format('F j, Y') }}</span>.<span
                                        class="ms-2">{{ $newsDetails->author->name }}</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                @empty
                    <div>Not Found</div>
                @endforelse
            </div>
            @include('auth.admin.news.news-pagination')
        </div>
    </section>
@endsection
