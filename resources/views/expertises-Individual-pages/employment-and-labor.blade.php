@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.employmentAndLabor') }}
@endsection

@section('area-title')
    {{ __('practiceArea.employmentAndLabor') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.employmentAndLabor') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.employmentAndLabor') !!}
@endsection
