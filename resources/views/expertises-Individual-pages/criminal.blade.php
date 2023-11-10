@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.criminal') }}
@endsection

@section('area-title')
    {{ __('practiceArea.criminal') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.criminal') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.criminal') !!}
@endsection
