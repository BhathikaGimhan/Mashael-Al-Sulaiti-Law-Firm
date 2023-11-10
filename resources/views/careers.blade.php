@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.careers') }}
@endsection
@section('content')
    <!-- Hero-->
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/career-banner-2.jpeg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">{{ __('title.careers') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" class="text-white">{{ __('title.home') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="px-xxl-5 py-5">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <div class="row">
                <div>
                    <h1 class="text-dark fw-bold mt-0">{{ __('carreer.heading.join') }}</h1>
                    <div>{!! trans('carreer.content.join') !!}</div>

                    <h1 class="text-dark fw-bold">{{ __('carreer.heading.whyWorkWithUs') }}</h1>
                    <h5 class="fw-bold logo-red">{{ __('carreer.heading.growth') }}</h5>
                    <p>{{ __('carreer.content.whyWorkWithUs') }}</p>
                    <h5 class="fw-bold logo-red">{{ __('carreer.heading.environment') }}</h5>
                    <p>{{ __('carreer.content.environment') }}</p>
                    <h5 class="fw-bold logo-red">{{ __('carreer.heading.balance') }}</h5>
                    <p>{{ __('carreer.content.balance') }}</p>
                </div>
                <div class="col-lg-12">
                    <div
                        style="background-image: url('/assets/img/components-images/how-to-join.jpg'); background-repeat: no-repeat;">
                        <div class="px-4 py-4 my-2" style="background-color: rgba(0, 0, 0, 0.479)">
                            <div class="col-xl-8 col-md-9 text-center mx-auto p-md-5">
                                <h1 class="text-light mt-0">{{ __('carreer.heading.howtojoin') }}</h1>
                                <p class="text-light mb-4">{{ __('carreer.content.howtojoin') }}</p>
                                <a class="btn cv-btn" href="mailto:careers@mas.com.qa">{{ __('buttons.cvBtn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-dark fw-bold">{{ __('carreer.heading.confidentiality') }}</h1>
                    <p>{{ __('carreer.content.confidentiality') }}</p>
                </div>
                {{-- <div class="col-lg-5 mt-lg-0 mt-5">
                <h1 class="h5 fw-bold text-dark mt-0 mb-4">Latest Job Vacancies</h1>
                <table class="table table-hover">
                    <thead style="background-color: #800000">
                        <tr>
                            <th>
                                <p class="text-white m-0">{{ __('Position and Employer') }}</p>
                            </th>
                            <th>
                                <p class="text-white m-0">{{ __('Opening Date') }}</p>
                            </th>
                            <th>
                                <p class="text-white m-0">{{ __('Closing Date') }}</p>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($vacancies as $vacancy)
                            <tr>
                                <td class="logo-red text-capitalize">{{ $vacancy->position }}</td>
                                <td>{{ $vacancy->opening_date }}</td>
                                <td>{{ $vacancy->closing_date }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{ __('No vacancies found.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> --}}

            </div>
        </div>
    </section>
@endsection
