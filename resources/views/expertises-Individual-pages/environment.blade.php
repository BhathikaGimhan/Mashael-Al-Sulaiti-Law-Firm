@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.environment') }}
@endsection

@section('area-title')
    {{ __('practiceArea.environment') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.environment') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.environment') !!}
@endsection
