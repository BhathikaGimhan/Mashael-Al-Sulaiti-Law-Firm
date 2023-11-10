@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Vacancies')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>{{ __('Vacancies') }}</h1>
        <div class="">
            <a href="{{ route('admin.vacancies.create') }}" class="btn btn-success"><i class="ai-circle-plus me-2"></i>Add
                Vacancy</a>
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
                            <th>{{ __('Position') }}</th>
                            <th>{{ __('Opening Date') }}</th>
                            <th>{{ __('Closing Date') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                        </thead>

                        <tbody>
                            @forelse ($vacancies as $vacancy)
                                <tr>
                                    <td>{{ $vacancy->position }}</td>
                                    <td>{{ $vacancy->opening_date }}</td>
                                    <td>{{ $vacancy->closing_date }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.vacancies.edit', $vacancy) }}"
                                                class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                            @if (Auth::user()->hasRole('admin'))
                                                <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                    data-url="{{ route('admin.vacancies.destroy', $vacancy->id) }}">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ __('No vacancies found.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('auth.admin.deletemodal')
@endsection
