@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.investment') }}
@endsection

@section('area-title')
    {{ __('practiceArea.investment') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.investment') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.investment') !!}
@endsection
