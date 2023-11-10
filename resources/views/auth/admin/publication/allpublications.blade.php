@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Publications')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Publications</h1>
        <div class="">
            <a href="{{ route('admin.publications.create') }}" class="btn btn-success"><i class="ai-circle-plus me-2"></i>Add
                Publication</a>
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
                            <th colspan="4">Publication Title</th>
                            <th colspan="4" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($publications as $index => $publication)
                            <tr>
                                <td colspan="1" class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ ++$index }}</p>
                                </td>
                                <td colspan="3" class="align-middle">
                                    <div style="width: 100px">
                                        <img class="rounded" src="{{ asset($publication->featured_image_public_path) }}"
                                            alt="{{ $publication->publication_title }}">
                                    </div>
                                </td>
                                <td colspan="4" class="text-capitalize align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ $publication->publication_title }}
                                    </p>
                                </td>
                                <td colspan="4" class="align-middle text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="/manage/publications/{{ $publication->id }}"
                                            class="btn btn-primary btn-icon me-1 mb-0"><i class="ai-show"></i></a>

                                        <a href="/manage/publications/{{ $publication->id }}/edit"
                                            class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                        @if (Auth::user()->hasRole('admin'))
                                            <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-url="{{ route('admin.publications.destroy', $publication->id) }}">
                                                <i class="ai-trash"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{ __('No publications found.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @include('auth.admin.deletemodal')

        @if (count($publications) > 0)
            @include('auth.admin.publication.publicationspagination')
        @endif
    </section>

@endsection
