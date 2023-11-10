@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | {{ $qatariLaw->title }}')
@section('content')
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <h5 class="text-capitalize mt-4">{{ $qatariLaw->title }}</h5>
        <div class="mb-2">{!! $qatariLaw->description !!}</div>
        <img src="{{ $qatariLaw->image }}" alt="{{ $qatariLaw->title }}" style="width: 240px">
        <div class="mt-3">{!! $qatariLaw->content !!}</div>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.qatari-laws.index') }}" class="btn btn-dark"><i class="ai-arrow-left"></i>Go
            Back</a>
    </div>
</section>
@endsection