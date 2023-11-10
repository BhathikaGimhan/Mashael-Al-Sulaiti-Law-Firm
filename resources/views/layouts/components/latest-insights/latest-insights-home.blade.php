<section class="py-5 px-xxl-5">
    <div class="container-fluid px-xxl-5 px-lg-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
        data-disable-parallax-down="md">
        <h1 class="logo-red text-center mb-4 mt-0">{{ __('title.latestInsights') }}</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <!-- Latest News -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="h5 mb-3 fw-bold">
                            <a href="/news" class="logo-red pop-text">{!! trans('title.subTitleHome.latestNew') !!}</a>
                        </h2>
                    </div>
                    <div class="col-12">
                        @forelse ($latestNews->take(1) as $newsDetails)
                            <a style="text-decoration: none;" href="/news/{{ $newsDetails->slug }}">
                                <div class="card zoom-effect shadow-sm h-100" dir="{{ $newsDetails->lang_type }}"
                                    style="border-radius: 4px;">
                                    <div class="zoom-effect-wrapper">
                                        <img src="{{ $newsDetails->image ?? asset('assets/img/blog/grid/01.jpg') }}"
                                            class="zoom-effect-img card-top-img w-100" alt="Card image"
                                            style="border-radius: 4px 4px 0px 0px; height:250px;">
                                    </div>
                                    <div class="card-body p-4">
                                        <p
                                            class="fs-lg text-dark fw-bold text-capitalize pop-text title-max-lines mt-0">
                                            {{ $newsDetails->title }}
                                        </p>
                                        <p class="card-text mb-3 max-lines text-dark">{{ $newsDetails->description }}
                                        </p>
                                        <p class="text-dark" style="font-size: 13px; font-weight:400">
                                            <span
                                                class="me-2">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $newsDetails->created_at)->format('F j, Y') }}</span>.
                                            <span class="ms-2">{{ $newsDetails->author->name }}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card zoom-effect shadow-sm h-100" style="border-radius: 4px;">
                                <div class="card-body p-5 text-center">
                                    <div class="text-center fw-bold fs-lg">{{ __('title.commingSoon') }}</div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <!-- Latest Articles -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="h5 mb-3 fw-bold">
                            <a href="/articles" class="logo-red pop-text">{!! trans('title.subTitleHome.latestArticle') !!}</a>
                        </h2>
                    </div>
                    <div class="col-12">
                        @forelse ($latestArticles->take(1) as $article)
                            <a href="{{ route('articles.show', $article->article_slug) }}" class="text-decoration-none">
                                <div class="card zoom-effect border-1 shadow-sm h-100" dir="{{ $article->lang_type }}"
                                    style="border-radius: 4px;">
                                    <div class="zoom-effect-wrapper">
                                        <img src="{{ asset($article->featured_image_public_path) }}"
                                            class="zoom-effect-img card-top-img w-100"
                                            alt="{{ $article->article_title }}"
                                            style="border-radius: 4px 4px 0px 0px; height:250px">
                                    </div>
                                    <div class="card-body p-4">
                                        <p
                                            class="fs-lg fw-bold text-dark text-capitalize pop-text title-max-lines my-2">
                                            {{ $article->article_title }}
                                        </p>
                                        <p class="card-text max-lines mb-3">{{ $article->article_description }}</p>
                                        <p class="text-dark" style="font-size: 13px; font-weight:400">
                                            <span
                                                class="me-2">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('F j, Y') }}</span>.
                                            <span
                                                class="ms-2">{{ $created_by = $article->createdBy->name ?? 'None' }}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card zoom-effect border-1 shadow-sm h-100" style="border-radius: 4px;">
                                <div class="card-body p-5 text-center">
                                    <div class="text-center fw-bold fs-lg">{{ __('title.commingSoon') }}</div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <!-- Latest Publications -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="h5 mb-3 fw-bold">
                            <a href="/publications" class="logo-red pop-text">{!! trans('title.subTitleHome.latestPublication') !!}</a>
                        </h2>
                    </div>
                    <div class="col-12">
                        @forelse ($latestPublications->take(1) as $index => $publication)
                            <a href="{{ route('publications.show', $publication->publication_slug) }}"
                                class="text-decoration-none">
                                <div class="card zoom-effect border-1 shadow-sm mb-5"
                                    dir="{{ $publication->lang_type }}" style="border-radius: 4px;">
                                    <div class="zoom-effect-wrapper">
                                        <img src="{{ asset($publication->featured_image_public_path) }}"
                                            class="zoom-effect-img card-top-img w-100"
                                            alt="{{ $publication->publication_title }}"
                                            style="border-radius: 4px 4px 0px 0px; height:250px">
                                    </div>
                                    <div class="card-body p-4">
                                        <p
                                            class="fs-lg fw-bold text-dark text-capitalize pop-text title-max-lines my-2">
                                            {{ $publication->publication_title }}
                                        </p>
                                        <p class="card-text max-lines mb-3">
                                            {{ $publication->description }}
                                        </p>
                                        <p class="text-dark" style="font-size: 13px; font-weight: 400">
                                            <span class="me-2">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publication->created_at)->format('F j, Y') }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card zoom-effect h-100" style="border-radius: 4px;">
                                <div class="card-body p-5 text-center">
                                    <div class="text-center fw-bold fs-lg">{{ __('title.commingSoon') }}</div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
