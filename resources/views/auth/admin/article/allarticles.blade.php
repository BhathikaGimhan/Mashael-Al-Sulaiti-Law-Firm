@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Articles')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Articles</h1>
        <div class="">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-success"><i class="ai-circle-plus me-2"></i>Add
                Article</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            @include('auth.admin.successmessage')
            <!-- Table START -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="3">Image</th>
                            <th colspan="3">Article Title</th>
                            <th colspan="2">Category</th>
                            <th colspan="3" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $index => $article)
                            <tr>
                                <td colspan="1" class="text-center align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ ++$index }}</p>
                                </td>
                                <td colspan="3" class="align-middle">
                                    <div class="text-center" style="width: 100px">
                                        <img class="rounded" src="{{ asset($article->featured_image_public_path) }}"
                                            alt="{{ $article->article_title }}">
                                    </div>
                                </td>
                                <td colspan="3" class="text-capitalize">
                                    <p class="text-xs font-weight-bold mb-0">{{ $article->article_title }}
                                    </p>
                                </td>
                                <td colspan="2" class="text-capitalize align-middle">
                                    <span class="badge bg-warning fs-sm">
                                        {{ $article_category_id = $article->articleCategory->article_category_name }}
                                    </span>
                                </td>
                                <td colspan="3" class="align-middle">
                                    <div class="d-flex">
                                        <a href="/manage/articles/{{ $article->id }}"
                                            class="btn btn-primary btn-icon me-1 mb-0"><i class="ai-show"></i></a>

                                        <a href="/manage/articles/{{ $article->id }}/edit"
                                            class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                        @if (Auth::user()->hasRole('admin'))
                                            <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-url="{{ route('admin.articles.destroy', $article->id) }}">
                                                <i class="ai-trash"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{ __('No articles found.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @include('auth.admin.deletemodal')
        @if (count($articles) > 0)
            @include('auth.admin.article.articlespagination')
        @endif
    </section>

@endsection
