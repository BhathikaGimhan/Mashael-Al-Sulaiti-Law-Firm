@extends('expertises-Individual-pages.layout.main')
@section('title')
    Mashael Alsulaiti Law Firm | {{ __('practiceArea.maritimeAndAviation') }}
@endsection

@section('area-title')
    {{ __('practiceArea.maritimeAndAviation') }}
@endsection
@section('area-background')
    {!! trans('practiceAreaContents.bg.maritimeAndAviation') !!}
@endsection
@section('area-content')
    {!! trans('practiceAreaContents.maritimeAndAviation') !!}
@endsection
