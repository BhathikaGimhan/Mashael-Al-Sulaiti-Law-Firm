<section class="px-xxl-5 py-5" dir="ltr">
    <div class="container-fluid px-xxl-5 px-lg-5">
        <h1 class="mb-5">Latest Publications</h1>
        <div class="row pt-4">
            <!--- card --->
            @forelse ($latestPublications as $index => $publication)
                <div class="col-md-6 col-lg-4"
                    dir="{{ $publication->lang_type }}>
                        <div class="article-card bg-light mb-5">
                    <div class="card-body text-center px-4 pt-1 pb-4">
                        <a href="{{ $publication->publication_file_path }}" class="">
                            <img src="{{ $publication->featured_image_public_path }}" class="mt-n4"
                                alt="{{ $publication->publication_title }}"></a>
                        <h5 class="card-title text-capitalize mt-3 mb-2 ">{{ $publication->publication_title }}
                        </h5>
                        <span class="badge bg-dark mb-3">Published on :
                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publication->created_at)->format('F j, Y') }}</span>
                    </div>
                </div>
            @empty
                <div class="text-center fw-bold fs-lg my-4">{{ __('title.notFound') }}</div>
            @endforelse
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-dark mb-1" href="/publications">View all</a>
    </div>
</section>
