@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.family') }}
@endsection

@section('area-title')
    {{ __('practiceArea.family') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.family') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.family') !!}
@endsection
