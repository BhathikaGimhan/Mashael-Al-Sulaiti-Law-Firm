@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All News')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All News</h1>
        <div class="">
            <a href="{{ route('admin.news.create') }}" class="btn btn-success"><i class="ai-circle-plus me-2"></i>Add News</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            @include('auth.admin.successmessage')
            <!-- Table START -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead;>
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="3">Image</th>
                            <th colspan="4">Title</th>
                            <th colspan="4" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $index => $siNews)
                                <tr>
                                    <th colspan="1" scope="row" class="text-center align-middle">
                                        <p class="text-xs font-weight-bold mb-0">{{ ++$index }}</p>
                                    </th>
                                    <td colspan="3" class="align-middle text-center">
                                        <div style="width: 100px">
                                            <img class="rounded" src="{{ asset($siNews->image) }}"
                                                alt="{{ $siNews->title }}">
                                        </div>
                                    </td>
                                    <td colspan="3" class="align-middle">
                                        <p class="text-xs font-weight-bold mb-0 text-capitalize">{{ $siNews->title }}
                                        </p>
                                    </td>
                                    <td colspan="5" class="text-center align-middle">
                                        <div class="d-flex justify-content-center">
                                            <a href="/manage/news/{{ $siNews->id }}"
                                                class="btn btn-primary btn-icon me-1 mb-0"><i class="ai-show"></i></a>
                                            <a href="/manage/news/{{ $siNews->id }}/edit"
                                                class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                            @if (Auth::user()->hasRole('admin'))
                                                <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                    data-url="{{ route('admin.news.destroy', $siNews->id) }}">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ __('No news found.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                </table>
            </div>
        </div>
        @if (count($news) > 0)
            @include('auth.admin.news.news-pagination')
        @endif
    </section>
    @include('auth.admin.deletemodal')

@endsection
