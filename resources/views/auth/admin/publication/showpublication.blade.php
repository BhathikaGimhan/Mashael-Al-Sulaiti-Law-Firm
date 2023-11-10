@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Show Publication')
@section('content')
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $publication->publication_title }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img class="mb-4" src="{{ $publication->featured_image_public_path }}" alt="Featured Image"
                                    style="height: 150px"></td>
                        </tr>
                        <tr>
                            <td><strong>Description</strong></td>
                            <td>{{ $publication->description }}</td>
                        </tr>
                        <tr>
                            <td><strong>Content</strong></td>
                            <td>@php echo htmlspecialchars_decode($publication->content); @endphp</td>
                        </tr>
                        <tr>
                            <td>Create At</td>
                            <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publication->created_at)->format('F j, Y') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <p>Publication File Path: <a
                    href="{{ $publication->publication_file_path }}">{{ $publication->publication_file_path }}</a></p> --}}
            <div class="mt-4">
                <a href="{{ route('admin.publications.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go
                    Back</a>
            </div>
        </div>
    </section>
@endsection
