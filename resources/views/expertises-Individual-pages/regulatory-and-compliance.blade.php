@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.regulatoryAndCompliance') }}
@endsection

@section('area-title')
    {{ __('practiceArea.regulatoryAndCompliance') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.regulatoryAndCompliance') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.regulatoryAndCompliance') !!}
@endsection
