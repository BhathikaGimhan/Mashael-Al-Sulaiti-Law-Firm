@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Judicial Systems')
@section('content')
<section class="bg-dark position-relative py-5 first-sec">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .02);"></div>
    <div class="container dark-mode position-relative zindex-2 pt-lg-5 pt-0 mb-4 mb-sm-5">
        <div class="row mb-sm-0 mb-lg-3">
            <div class="col-lg-10 col-xl-9">
                <!-- Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Judicial Systems</li>
                    </ol>
                </nav>
                <h1 class="display-2 pb-0 mb-0">Judicial Systems</h1>
            </div>
        </div>
    </div>
</section>

<section class="container pt-5">

    <div class="row">
        @forelse ($judicialSystems as $judicialSystem)
        <!--- card --->
        <div class="col-md-6 col-lg-3">
            <div class="article-card shadow-sm mb-5">
                <img src="{{$judicialSystem->image ?? asset('assets/img/blog/grid/01.jpg')}}" class="card-top-img" alt="Card image">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4 mt-n1">
                        <span class="fs-sm text-muted">{{$judicialSystem->created_at->diffForHumans()}}</span>
                        <span class="fs-xs opacity-20 mx-3">|</span>
                        <span class="badge text-nav fs-xs border">New</span>
                    </div>
                    <a style="text-decoration: none;" href="/judicial-system/{{$judicialSystem->slug}}">
                        <h5 class="card-title">{{$judicialSystem->title}}</h5>
                        <p class="card-text">{{$judicialSystem->description}}</p>
                    </a>
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{$judicialSystem->createdBy->image ?? asset('assets/img/avatar/09.jpg') }}" class="rounded-circle me-2" alt="Author image" width="40" height="40">
                        <p class="mb-0">{{$judicialSystem->createdBy->name}}</p>
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