@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | {{ $article->article_title }} ')
@section('content')
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <!-- Basic table -->
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td><strong>Article title</strong></td>
                            <td class="text-capitalize">{{ $article->article_title }}</td>
                        </tr>
                        <tr>
                            <td><strong>Article Featured Image</strong></td>
                            <td><img src="{{ asset($article->featured_image_public_path) }}"
                                    alt=" {{ $article->article_title }}" style="width: 150px"></td>
                        </tr>
                        <tr>
                            <td><strong>Article Category</strong></td>
                            <td class="text-capitalize">
                                {{ $article_category_id = $article->articleCategory->article_category_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Article Description</strong></td>
                            <td>{{ $article->article_description }}</td>
                        </tr>
                        <tr>
                            <td><strong>Article Content</strong></td>
                            <td>@php echo htmlspecialchars_decode($article->article_content); @endphp</td>
                        </tr>
                        <tr>
                            <td><strong>Created By</strong></td>
                            <td class="text-capitalize">{{ $created_by = $article->createdBy->name ?? 'None' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Created At</strong></td>
                            <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('F j, Y') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.articles.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go
                    Back</a>
            </div>
        </div>
    </section>

@endsection
