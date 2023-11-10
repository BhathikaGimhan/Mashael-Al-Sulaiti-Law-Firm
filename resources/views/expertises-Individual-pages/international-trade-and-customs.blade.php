@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.internationalTradeAndCustoms') }}
@endsection

@section('area-title')
    {{ __('practiceArea.internationalTradeAndCustoms') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.internationalTradeAndCustoms') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.internationalTradeAndCustoms') !!}
@endsection
