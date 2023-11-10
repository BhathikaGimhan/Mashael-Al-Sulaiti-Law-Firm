@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.tourism') }}
@endsection

@section('area-title')
    {{ __('practiceArea.tourism') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.tourism') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.tourism') !!}
@endsection
