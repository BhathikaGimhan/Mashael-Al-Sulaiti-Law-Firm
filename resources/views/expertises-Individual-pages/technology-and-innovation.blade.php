@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.technologyAndInnovation') }}
@endsection

@section('area-title')
    {{ __('practiceArea.technologyAndInnovation') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.technologyAndInnovation') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.technologyAndInnovation') !!}
@endsection
