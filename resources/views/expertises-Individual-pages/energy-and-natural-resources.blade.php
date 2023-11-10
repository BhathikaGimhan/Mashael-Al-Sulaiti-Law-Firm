@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.energyAndNaturalResources') }}
@endsection

@section('area-title')
    {{ __('practiceArea.energyAndNaturalResources') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.energyAndNaturalResources') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.energyAndNaturalResources') !!}
@endsection
