@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Create Publication ')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Create User</h1>
        <div class="">
            <a href="{{ route('admin.users.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                        <option value="">Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Create User</button>
            </form>
        </div>
    </section>

@endsection
