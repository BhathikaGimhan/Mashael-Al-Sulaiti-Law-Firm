@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.intellectualProperty') }}
@endsection

@section('area-title')
    {{ __('practiceArea.intellectualProperty') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.intellectualProperty') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.intellectualProperty') !!}
@endsection
