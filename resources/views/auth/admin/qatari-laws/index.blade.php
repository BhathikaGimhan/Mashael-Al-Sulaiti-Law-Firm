@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Qatari Laws')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Qatari Laws</h1>
        <div class="">
            <a href="{{ route('admin.qatari-laws.create') }}" class="btn btn-success">Add Law</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            @include('auth.admin.successmessage')
            <!-- Table START -->
            @if (count($qatariLaws) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead;>
                            <tr>
                                <th class="text-center">NO</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($qatariLaws as $index => $qatariLaw)
                                    <tr>
                                        <th scope="row" class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ ++$index }}</p>
                                        </th>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="text-center" style="width: 100px">
                                                <img class="rounded" src="{{ asset($qatariLaw->image) }}"
                                                    alt="{{ $qatariLaw->title }}">
                                            </div>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            <p class="text-xs font-weight-bold mb-0">{{ $qatariLaw->title }}
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <a href="/manage/qatari-laws/{{ $qatariLaw->id }}"
                                                class="btn btn-primary btn-icon me-1 mb-0"><i class="ai-show"></i></a>

                                            <a href="/manage/qatari-laws/{{ $qatariLaw->id }}/edit"
                                                class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>

                                            @if (Auth::user()->hasRole('admin'))
                                                <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                    data-url="{{ route('admin.qatari-laws.destroy', $qatariLaw->id) }}">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
    @include('auth.admin.deletemodal')

@endsection
