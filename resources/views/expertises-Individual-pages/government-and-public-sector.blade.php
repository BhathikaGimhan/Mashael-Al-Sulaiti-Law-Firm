@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.governmentAndPublicSector') }}
@endsection

@section('area-title')
    {{ __('practiceArea.governmentAndPublicSector') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.governmentAndPublicSector') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.governmentAndPublicSector') !!}
@endsection
