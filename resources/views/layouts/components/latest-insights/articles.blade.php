<section class="container py-5">
    <div class="row">
        <h1 class="text-dark fw-bold text-center mb-5">{{ __('title.latestArticles') }}</h1>
        <!--- card --->
        @forelse ($latestArticles as $article)
            <div class="col-md-6 col-lg-4" dir="{{ $article->lang_type }}">
                <a href="{{ route('articles.show', $article->article_slug) }}" class="text-decoration-none">
                    <div class="card zoom-effect border-1 shadow-sm mb-5" style="border-radius: 4px;">
                        <div class="zoom-effect-wrapper">
                            <img src="{{ asset($article->featured_image_public_path) }}"
                                class="zoom-effect-img card-top-img w-100" alt="{{ $article->article_title }}"
                                style="border-radius: 4px 4px 0px 0px; height:250px">
                        </div>

                        <div class="card-img-overlay">
                            <span
                                class="badge bg-info fs-xs text-capitalize">{{ $article_category_id = $article->articleCategory->article_category_name }}</span>
                        </div>
                        <div class="card-body p-4">
                            <p class="fs-lg fw-bold text-dark text-capitalize my-2">{{ $article->article_title }}</p>
                            <p class="card-text max-lines mb-3">{{ $article->article_description }}</p>
                            <p class="text-dark" style="font-size: 13px; font-weight:400"><span
                                    class="me-2">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('F j, Y') }}</span>.<span
                                    class="ms-2">{{ $created_by = $article->createdBy->name ?? 'None' }}</span></p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="text-center fw-bold fs-lg">{{ __('title.notFound') }}</div>
        @endforelse
    </div>
    <div class="text-center">
        <a class="btn btn-dark mb-1" href="/articles">{{ __('buttons.viewMore') }}</a>
    </div>
</section>
