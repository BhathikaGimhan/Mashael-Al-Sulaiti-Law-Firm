@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.disputeResolutionAndLitigation') }}
@endsection

@section('area-title')
    {{ __('practiceArea.disputeResolutionAndLitigation') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.disputeResolutionAndLitigation') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.disputeResolutionAndLitigation') !!}
@endsection
