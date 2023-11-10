@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.healthcareAndPharmaceuticals') }}
@endsection

@section('area-title')
    {{ __('practiceArea.healthcareAndPharmaceuticals') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.healthcareAndPharmaceuticals') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.healthcareAndPharmaceuticals') !!}
@endsection
