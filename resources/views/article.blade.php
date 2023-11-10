@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Article')
@section('content')
    <section class="px-xxl-5 py-5 mt-5">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <!-- Breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ __('title.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="/articles">{{ __('title.articles') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->article_title }}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post title + post meta-->
                    <h1 class="pb-2 pb-lg-3">{{ $article->article_title }}</h1>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex align-items-center mb-4 {{ __('insights.margin-r4') }}">

                            <p class="position-relative fw-semibold p-0">
                                <span class="fs-sm">{{ __('insights.by') }}</span>
                                <strong>{{ $created_by = $article->createdBy->name ?? 'None' }}</strong>
                            </p>
                            <p class="position-relative fw-semibold p-0 {{ __('insights.margin-l4') }}">
                                <span class="fs-sm">{{ __('insights.at') }}</span>
                                <strong>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('F j, Y') }}</strong>
                            </p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <span class="fs-sm {{ __('insights.margin-r2') }}">{{ __('insights.sharePost') }}</span>
                            <div class="d-flex">
                                <a class="nav-link p-2 {{ __('insights.margin-r2') }}" href="#"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                    <i class="ai-instagram"></i>
                                </a>
                                <a class="nav-link p-2 {{ __('insights.margin-r2') }}" href="#"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                                    <i class="ai-facebook"></i>
                                </a>
                                <a class="nav-link p-2 {{ __('insights.margin-r2') }}" href="#"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram">
                                    <i class="ai-telegram fs-sm"></i>
                                </a>
                                <a class="nav-link p-2 {{ __('insights.margin-r2') }}" href="#"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                                    <i class="ai-twitter"></i>
                                </a>
                                <a class="nav-link p-2 {{ __('insights.margin-r2') }}" href="#"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn">
                                    <i class="ai-linkedin"></i>
                                </a>
                                <a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="WhatsApp">
                                    <i class="ai-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="w-100" src="{{ asset($article->featured_image_public_path) }}"
                        alt=" {{ $article->article_title }}">
                    <!-- Post content-->
                    <p class="mt-5">@php echo htmlspecialchars_decode($article->article_content); @endphp</p>

                </div>
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                <div class="col-lg-4">
                    <!-- Search box-->
                    {{-- <div class="position-relative mb-4 mb-lg-5"><i
                            class="ai-search position-absolute top-50 start-0 translate-middle-y {{ __('insights.margin-l3') }}"></i>
                        <input class="form-control {{ __('insights.padding-l5') }}" type="search"
                            placeholder="Enter keyword">
                    </div> --}}

                    <!-- Recent posts-->
                    <div class="card border-0" style="background: transparent">
                        <div class="card-body mt-2 pt-5">
                            <h4 class="mt-5 mb-4">{{ __('insights.recentPublication') }}</h4>
                            <ul class="list-unstyled mb-lg-5 mb-4 {{ __('insights.paddingZero') }}">
                                @foreach ($recentArticles as $recentArticle)
                                    <li class="border-bottom pb-3 mb-3"><span class="h6 mb-0"><a
                                                href="{{ route('articles.show', $recentArticle->article_slug) }}">{{ $recentArticle->article_title }}</a></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="card border-0" style="background: transparent">
                        <div class="card-body pt-5">
                            <h4 class="mt-5 mb-4">{{ __('insights.resentArticle') }}</h4>
                            <ul class="list-unstyled mb-lg-5 mb-4 {{ __('insights.paddingZero') }}">
                                @foreach ($recentArticles as $recentArticle)
                                    <li class="border-bottom pb-3 mb-3"><span class="h6 mb-0"><a
                                                href="{{ route('articles.show', $recentArticle->article_slug) }}">{{ $recentArticle->article_title }}</a></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Relevant topics-->

                </div>
            </div>
        </div>
    </section>
    <!-- Sidebar toggle button-->

@endsection
@section('footer_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function(e) {
            let shareUrl = window.location.href;

            const facebookBtn = document.querySelector('.ai-facebook');
            const telegramBtn = document.querySelector('.ai-telegram');
            const linkedinBtn = document.querySelector('.ai-linkedin');
            const twitterBtn = document.querySelector('.ai-twitter');
            const whatsappBtn = document.querySelector('.ai-whatsapp');

            facebookBtn.addEventListener('click', () => {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`);
            });

            telegramBtn.addEventListener('click', () => {
                window.open(`https://telegram.me/share/url?url=${encodeURIComponent(shareUrl)}`);
            });

            linkedinBtn.addEventListener('click', () => {
                window.open(
                    `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`
                );
            });

            twitterBtn.addEventListener('click', () => {
                window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(shareUrl)}`);
            });

            whatsappBtn.addEventListener('click', () => {
                window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(shareUrl)}`);
            });
        });
    </script>
@endsection
