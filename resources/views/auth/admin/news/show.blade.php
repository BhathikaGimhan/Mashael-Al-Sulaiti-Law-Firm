@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | {{ $news->title }}')
@section('content')
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $news->title }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img src="{{ $news->image }}" alt="{{ $news->title }}" style="width: 150px"></td>
                        </tr>
                        <tr>
                            <td>Tags</td>
                            <td>
                                @foreach (json_decode($news->tags) as $tag)
                                    <span class="badge bg-success">{{ $tag->value }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{!! $news->description !!}</td>
                        </tr>
                        <tr>
                            <td>Content</td>
                            <td>{!! $news->content !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.news.index') }}" class="btn btn-dark"><i class="ai-arrow-left"></i>Go
                    Back</a>
            </div>
        </div>
    </section>
@endsection
