@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Article Categories')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Article Categories</h1>
        <div class="">
            <a href="{{ route('admin.article-categories.create') }}" class="btn btn-success"><i
                    class="ai-circle-plus me-2"></i>Add Category</a>
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
                            <th colspan="4">Category Name</th>
                            <th class="4">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($articleCategories as $index => $category)
                                <tr>
                                    <td colspan="1" scope="row" class="align-middle">
                                        <p class="text-xs font-weight-bold mb-0">{{ ++$index }}</p>
                                    </td>
                                    <td colspan="3" class="align-middle">
                                        <div class="text-center" style="width: 100px">
                                            <img class="rounded" src="{{ asset($category->article_category_image) }}"
                                                alt="{{ $category->article_category_name }}">
                                        </div>
                                    </td>
                                    <td colspan="4" class="text-capitalize align-middle">
                                        <p class="text-xs font-weight-bold mb-0">{{ $category->article_category_name }}
                                        </p>
                                    </td>
                                    <td colspan="4" class="align-middle text-center">
                                        <div class="d-flex">
                                            <a href="/manage/article-categories/{{ $category->id }}"
                                                class="btn btn-primary btn-icon me-1 mb-0"><i class="ai-show"></i></a>

                                            <a href="/manage/article-categories/{{ $category->id }}/edit"
                                                class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                            @if (Auth::user()->hasRole('admin'))
                                                <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                    data-url="{{ route('admin.article-categories.destroy', $category->id) }}">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ __('No article categories found.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                </table>
            </div>
        </div>
        @if (count($articleCategories) > 0)
            <div class="ms-4 mt-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        @if ($articleCategories->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                        class="ai-arrow-left"></i></a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $articleCategories->previousPageUrl() }}" tabindex="-1"><i
                                        class="ai-arrow-left"></i></a>
                            </li>
                        @endif

                        @foreach ($articleCategories->getUrlRange(1, $articleCategories->lastPage()) as $page => $url)
                            <li class="page-item{{ $page === $articleCategories->currentPage() ? ' active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($articleCategories->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $articleCategories->nextPageUrl() }}"><i
                                        class="ai-arrow-right"></i></a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                        class="ai-arrow-right"></i></a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endif
    </section>
    @include('auth.admin.deletemodal')
@endsection
