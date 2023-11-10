<section class="px-xxl-5 pt-5">
    <div class="container-fluid px-xxl-5 px-lg-5">
        <h1 class="text-dark fw-bold text-center mb-5 mt-0">{{ __('title.latestNews') }}</h1>
        <div class="row">
            @forelse ($latestNews as $newsDetails)
                <!--- card --->
                <div class="col-md-6 col-lg-4" dir="{{ $newsDetails->lang_type }}">
                    <a style="text-decoration: none;" href="/news/{{ $newsDetails->slug }}">
                        <div class="card zoom-effect shadow-sm mb-5" style="border-radius: 4px;">
                            <div class="zoom-effect-wrapper">
                                <img src="{{ $newsDetails->image ?? asset('assets/img/blog/grid/01.jpg') }}"
                                    class="zoom-effect-img card-top-img w-100" alt="Card image"
                                    style="border-radius: 4px 4px 0px 0px; height:250px;">
                            </div>
                            <div class="card-body p-4">
                                <p class="fs-lg text-dark fw-bold text-capitalize mt-0">{{ $newsDetails->title }}</p>
                                <p class="card-text mb-3 max-lines text-dark">{{ $newsDetails->description }}</p>
                                <p class="text-dark" style="font-size: 13px; font-weight:400"><span
                                        class="me-2">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $newsDetails->created_at)->format('F j, Y') }}</span>.<span
                                        class="ms-2">{{ $newsDetails->author->name }}</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="text-center fw-bold fs-lg my-4">{{ __('title.notFound') }}</div>
            @endforelse
        </div>
        <div class="text-center">
            <a class="btn btn-dark mb-1" href="/news">{{ __('buttons.viewMore') }}</a>
        </div>
    </div>
</section>
