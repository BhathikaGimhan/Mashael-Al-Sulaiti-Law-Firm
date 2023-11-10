@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.articles') }}
@endsection
@section('content')
    <section class="page-banner banner-overlay"
        style="background-image: url(/assets/img/banners/pages-banners/articles.jpg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">{{ __('title.articles') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" class="text-white">{{ __('title.articles') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container-fluid px-xxl-5 py-5">
        <div class="px-xxl-5 px-lg-5">
            <div class="row">
                @forelse ($articles as $index => $article)
                    <div class="col-md-6 col-lg-4" dir="{{ $article->lang_type }}">
                        <a href="{{ route('articles.show', $article->article_slug) }}" class="text-decoration-none">
                            <div class="card zoom-effect border-1 shadow-sm mb-5" style="border-radius: 4px;">
                                <div class="zoom-effect-wrapper">
                                    <img src="{{ asset($article->featured_image_public_path) }}"
                                        class="zoom-effect-img card-top-img w-100" alt="{{ $article->article_title }}"
                                        style="border-radius: 4px 4px 0px 0px; height:250px">
                                </div>
                                <div class="card-img-overlay">
                                    <span class="badge bg-info fs-xs text-capitalize">
                                        {{ $article->articleCategory->article_category_name }}
                                    </span>
                                </div>
                                <div class="card-body p-4">
                                    <p class="fs-lg fw-bold text-dark text-capitalize title-max-lines my-2">
                                        {{ $article->article_title }}
                                    </p>
                                    <p class="card-text max-lines mb-3">
                                        {{ $article->article_description }}
                                    </p>
                                    <p class="text-dark" style="font-size: 13px; font-weight: 400">
                                        <span class="me-2">
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('F j, Y') }}
                                        </span>
                                        <span class="ms-2">
                                            {{ $article->createdBy->name ?? 'None' }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="text-center fw-bold fs-lg">{{ __('title.notFound') }}</div>
                @endforelse
            </div>
            @include('auth.admin.article.articlespagination')
        </div>
    </section>
@endsection
