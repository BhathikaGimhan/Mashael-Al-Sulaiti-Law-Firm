@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Create Vacancy')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>{{ __('Create Vacancy') }}</h1>
        <div class="">
            <a href="{{ route('admin.vacancies.index') }}" class="btn btn-success">Go Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.vacancies.store') }}">
                @csrf

                <div class="form-group row mb-3">
                    <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                    <div class="col-md-6">
                        <input id="position" type="text" class="form-control @error('position') is-invalid @enderror"
                            name="position" value="{{ old('position') }}" placeholder="Enter position" autofocus>

                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="opening_date" class="col-md-4 col-form-label text-md-right">{{ __('Opening Date') }}</label>

                    <div class="col-md-6">
                        <input id="opening_date" type="date"
                            class="form-control @error('opening_date') is-invalid @enderror" name="opening_date"
                            value="{{ old('opening_date') }}" required>

                        @error('opening_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="closing_date" class="col-md-4 col-form-label text-md-right">{{ __('Closing Date') }}</label>

                    <div class="col-md-6">
                        <input id="closing_date" type="date"
                            class="form-control @error('closing_date') is-invalid @enderror" name="closing_date"
                            value="{{ old('closing_date') }}" required>

                        @error('closing_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
@section('footer_scripts')

@endsection
