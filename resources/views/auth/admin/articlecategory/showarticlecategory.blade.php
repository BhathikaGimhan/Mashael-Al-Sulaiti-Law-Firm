@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | {{ $articleCategory->article_category_name }}')
@section('content')
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td><strong>Article Category name</strong></td>
                            <td class="text-capitalize">{{ $articleCategory->article_category_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Article Category Featured Image</strong></td>
                            <td><img src="{{ $articleCategory->article_category_image }}"
                                    alt=" {{ $articleCategory->article_category_name }}" style="width: 150px"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.article-categories.index') }}" class="btn btn-dark"><i
                        class="ai-arrow-left me-2"></i>Go
                    Back</a>
            </div>
        </div>
    </section>
@endsection
