@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Mr. Mohamed Ibrahim')
@section('content')
    <section class="container-fluid px-xxl-5 px-lg-5 py-5">
        <div class="px-xxl-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/assets/img/our-team/Mr-Mohamed-Ibrahim.png" alt="Mr. Mohamed Ibrahim" class="text-center">
                    <h4 class="fw-bold text-dark">
                        {{ __('ourTeam.teamMembers.ibrahim.name') }}
                    </h4>
                    <p class="fs-lg">{{ __('ourTeam.teamMembers.ibrahim.designation') }}</p>
                    <p class="fs-md mb-2"><span class="fw-bold {{ __('ourTeam.titleMargin') }}">{{ __('title.email') }}:
                        </span>m.ibrahim@mas.com.qa</p>
                    <p class="fs-md mt-0"><span class="fw-bold {{ __('ourTeam.titleMargin') }}">{{ __('title.phone') }}:
                        </span><span dir="ltr">+974 4466 4626 / +974 4466 4633</span></p>

                </div>
                <div class="col-md-8">
                    {!! trans('ourTeam.teamMembers.ibrahim.profile') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
