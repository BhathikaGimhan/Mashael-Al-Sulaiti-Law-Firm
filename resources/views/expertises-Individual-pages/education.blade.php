@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.education') }}
@endsection

@section('area-title')
    {{ __('practiceArea.education') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.education') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.education') !!}
@endsection
