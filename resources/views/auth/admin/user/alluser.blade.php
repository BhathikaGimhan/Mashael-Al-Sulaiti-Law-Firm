@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Users')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Users</h1>
        <div class="">
            <a href="{{ route('admin.users.create') }}" class="btn btn-success"><i class="ai-circle-plus me-2"></i>Add User</a>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ $user->name }}
                                    </p>
                                </td>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}
                                    </p>
                                </td>
                                <td class="text-capitalize align-middle">
                                    @foreach ($user->roles as $role)
                                        <p class="text-xs font-weight-bold mb-0"> {{ $role->name }},
                                        </p>
                                    @endforeach
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                            class="btn btn-secondary btn-icon me-1 mb-0"><i class="ai-edit"></i></a>
                                        @if (Auth::user()->hasRole('admin'))
                                            <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-url="{{ route('admin.users.destroy', $user->id) }}">
                                                <i class="ai-trash"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{ __('No users found.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @include('auth.admin.deletemodal')
    </section>

@endsection
