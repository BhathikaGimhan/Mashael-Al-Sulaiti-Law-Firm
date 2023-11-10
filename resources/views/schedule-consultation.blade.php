@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Schedule Consultation')
@section('content')
    <section class="px-xxl-5 py-5">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <h1 class="display-3 text-dark text-center">{!! trans('contactus.mainHead') !!}</h1>
            <h3 class="h4 text-center">{!! trans('contactus.subHead') !!}</h3>
            {{-- <div class="">
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/maslawfirm/20min?primary_color=800000"
                    style="min-width:320px;height:700px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div> --}}
            <div class="mt-md-0 mt-3">
                @if (app()->isLocale('en'))
                    <div>
                        <script src="https://embed.ycb.me" async="true" data-domain="maslawfirmqatar-en"></script>
                    </div>
                @endif
                @if (app()->isLocale('ar'))
                    <div>
                        <script src="https://embed.ycb.me" async="true" data-domain="maslawfirmqatar-ar"></script>
                    </div>
                @endif
                @if (app()->isLocale('fr'))
                    <div>
                        <script src="https://embed.ycb.me" async="true" data-domain="maslawfirmqatar-fr"></script>
                    </div>
                @endif
            </div>
            {{-- <script src="https://embed.ycb.me" async="true" data-domain="maslawfirmqatar" data-content="schedule|all"
                data-intent="itt_37bd8bbf-8c78-405c-9e85-b5af51437x12" data-flow="book|cancel|reschedule" data-copyparameters>
            </script> --}}
        </div>
    </section>
@endsection
@section('footer_scripts')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var timezoneLabels = document.getElementsByClassName('XIfp1dhaTtPa5UlikIR_');
            if (timezoneLabels.length > 0) {
                for (var i = 0; i < timezoneLabels.length; i++) {
                    timezoneLabels[i].style.visibility = 'hidden';
                }
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            var timezoneLabels = document.getElementsByClassName('CRWV09Vs9BY6UR2JltQc');
            if (timezoneLabels.length > 0) {
                for (var i = 0; i < timezoneLabels.length; i++) {
                    timezoneLabels[i].style.setProperty('visibility', 'hidden', 'important');
                }
            }
        });
    </script> --}}

@endsection
