@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.bankingAndFinance') }}
@endsection

@section('area-title')
    {{ __('practiceArea.bankingAndFinance') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.bankingAndFinance') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.bankingAndFinance') !!}
@endsection
