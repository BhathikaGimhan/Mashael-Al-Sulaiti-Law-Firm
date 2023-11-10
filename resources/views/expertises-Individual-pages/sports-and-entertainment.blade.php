@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.sportsAndEntertainment') }}
@endsection

@section('area-title')
    {{ __('practiceArea.sportsAndEntertainment') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.sportsAndEntertainment') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.sportsAndEntertainment') !!}
@endsection
