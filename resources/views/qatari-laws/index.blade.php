@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Qatari Laws')
@section('content')
    <div class="section" style="background-image: url(assets/img/about/agency/parallax-image.jpg);">
        <div class="py-5" style="background-color: #8d8f92a8;">
            <div class="d-flex flex-column align-items-center py-5" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">

                <h1 class="text-white">
                    Qatari Laws</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white">Qatari Laws</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="container pt-5">

        <div class="row">
            @forelse ($qatariLaws as $qatariLaw)
                <!--- card --->
                <div class="col-md-6 col-lg-3">
                    <div class="article-card shadow-sm mb-5">
                        <img src="{{ $qatariLaw->image ?? asset('assets/img/blog/grid/01.jpg') }}" class="card-top-img"
                            alt="Card image">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4 mt-n1">
                                <span class="fs-sm text-muted">{{ $qatariLaw->created_at->diffForHumans() }}</span>
                                <span class="fs-xs opacity-20 mx-3">|</span>
                                <span class="badge text-nav fs-xs border">New</span>
                            </div>
                            <a style="text-decoration: none;" href="/qatari-law/{{ $qatariLaw->slug }}">
                                <h5 class="card-title">{{ $qatariLaw->title }}</h5>
                                <p class="card-text">{{ $qatariLaw->description }}</p>
                            </a>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ $qatariLaw->createdBy->image ?? asset('assets/img/avatar/09.jpg') }}"
                                    class="rounded-circle me-2" alt="Author image" width="40" height="40">
                                <p class="mb-0">{{ $qatariLaw->createdBy->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div>Not Found</div>
            @endforelse

        </div>
    </section>

@endsection
