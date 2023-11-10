@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | {{ $judicialSystem->title }}')
@section('content')
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <h5 class="text-capitalize mt-4">{{ $judicialSystem->title }}</h5>
        <div class="mb-2">{!! $judicialSystem->description !!}</div>
        <img src="{{ $judicialSystem->image }}" alt="{{ $judicialSystem->title }}" style="width: 240px">
        <div class="mt-3">{!! $judicialSystem->content !!}</div>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.judicial-systems.index') }}" class="btn btn-dark"><i class="ai-arrow-left"></i>Go
            Back</a>
    </div>
</section>
@endsection