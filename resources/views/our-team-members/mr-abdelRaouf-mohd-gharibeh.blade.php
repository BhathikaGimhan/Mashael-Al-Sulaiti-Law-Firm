@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Mr. AbdelRaouf Mohd Gharibeh')
@section('content')
    <section class="container-fluid px-xxl-5 px-lg-5 py-5">
        <div class="px-xxl-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/assets/img/our-team/Mr-AbdelRaouf-Mohd-Gharibeh.jpg" alt="Mr. AbdelRaouf Mohd Gharibeh"
                        class="text-center">
                    <h4 class="fw-bold text-dark">
                        {{ __('ourTeam.teamMembers.gharibeh.name') }}
                    </h4>
                    <p class="fs-lg">{{ __('ourTeam.teamMembers.gharibeh.designation') }}</p>
                    <p class="fs-md mb-2"><span class="fw-bold {{ __('ourTeam.titleMargin') }}">{{ __('title.email') }}:
                        </span>a.rauf@mas.com.qa</p>
                    <p class="fs-md mt-0"><span
                            class="fw-bold {{ __('ourTeam.titleMargin') }}">{{ __('title.phone') }}:</span>
                        <span dir="ltr">+974 4466 4626 / +974 4466 4633</span>
                    </p>
                </div>
                <div class="col-md-8">
                    {!! trans('ourTeam.teamMembers.gharibeh.profile') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
