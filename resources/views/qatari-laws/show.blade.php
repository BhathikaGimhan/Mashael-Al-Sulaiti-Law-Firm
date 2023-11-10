@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | '.$qatariLaw->title)
@section('content')
<div class="d-none d-lg-block" style="height: 65px"></div>
<section class="container pt-5 mt-5">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
            <li class="breadcrumb-item"><a href="/qatari-laws">Qatari Laws</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$qatariLaw->title}}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
            <!-- Post title + post meta-->
            <h1 class="pb-2 pb-lg-3">{{$qatariLaw->title}}</h1>
            <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                <div class="d-flex align-items-center mb-4 me-4"><span class="fs-sm me-2">By:</span><a class="nav-link position-relative fw-semibold p-0" href="#author" data-scroll data-scroll-offset="80">{{$qatariLaw->createdBy->name}}<span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span></a></div>
                <div class="d-flex align-items-center mb-4"><span class="fs-sm me-2">Share post:</span>
                    <div class="d-flex"><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="ai-instagram"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="ai-facebook"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram"><i class="ai-telegram fs-sm"></i></a><a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="ai-twitter"></i></a></div>
                </div>
            </div>
            <div class="fs-lg pt-2 pt-sm-3">{!! $qatariLaw->description !!}</div>
            <!-- Post content-->
            <figure class="figure">
                <img class="figure-img rounded-5 mb-3" src="{{$qatariLaw->image}}" alt="Image">
                <!-- <figcaption class="figure-caption">Image source tristique justo et pharetra</figcaption> -->
            </figure>
            <div class="fs-lg pt-2 pt-sm-3">{!! $qatariLaw->content !!}</div>
            <!-- Author widget-->
            <div class="border-top border-bottom py-4" id="author">
                <div class="d-flex align-items-start py-2"><img class="d-block rounded-circle mb-3" src="assets/img/avatar/04.jpg" width="56" alt="Author image">
                    <div class="d-md-flex w-100 ps-4">
                        <div style="max-width: 26rem;">
                            <h3 class="h5 mb-2">{{$qatariLaw->createdBy->name}}</h3>
                            <p class="fs-sm mb-0">{{$qatariLaw->createdBy->summary}}</p>
                        </div>
                        <div class="pt-4 pt-md-0 ps-md-4 ms-md-auto">
                            <h3 class="h5">Share post:</h3>
                            <div class="d-flex"><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="ai-instagram"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="ai-facebook"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram"><i class="ai-telegram fs-sm"></i></a><a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i class="ai-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Related articles (carousel) -->
<section class="container py-5 mt-sm-2 my-md-4 my-xl-5">
    <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4 mt-2 mt-xxl-3">
        <h2 class="h1 mb-0 me-4">Related Laws</h2>
        <div class="d-flex ms-auto">
            <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-post"><i class="ai-arrow-left"></i></button>
            <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post"><i class="ai-arrow-right"></i></button>
        </div>
    </div>
    <div class="swiper pb-2 pb-sm-3 pb-md-4" data-swiper-options="
  {
    &quot;spaceBetween&quot;: 24,
    &quot;loop&quot;: true,
    &quot;autoHeight&quot;: true,
    &quot;navigation&quot;: {
      &quot;prevEl&quot;: &quot;#prev-post&quot;,
      &quot;nextEl&quot;: &quot;#next-post&quot;
    },
    &quot;breakpoints&quot;: {
      &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
      &quot;1000&quot;: { &quot;slidesPerView&quot;: 3 }
    }
  }
">
        <div class="swiper-wrapper">
            @foreach ($relatedLaws as $relatedLaw)
            <!-- Post-->
            <article class="swiper-slide">
                <div class="position-relative"><img class="rounded-5" src="{{$relatedLaw->image}}" alt="Post image">
                    <h3 class="h4 mt-4 mb-0"><a class="stretched-link" href="/qatari-law/{{$relatedLaw->slug}}">{{$relatedLaw->title}}</a></h3>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
<!-- Sidebar toggle button-->
<button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><i class="ai-layout-column me-2"></i>Sidebar</button>
@endsection