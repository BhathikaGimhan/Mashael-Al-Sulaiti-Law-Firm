@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.corporateAndCommercial') }}
@endsection

@section('area-title')
    {{ __('practiceArea.corporateAndCommercial') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.corporateAndCommercial') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.corporateAndCommercial') !!}
@endsection
