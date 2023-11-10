@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Edit User ')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Edit User</h1>
        <div class="">
            <a href="{{ route('admin.users.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                        value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                        value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password"
                        value="{{ old('email', $user->password) }}" placeholder="Enter password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                        <option value="">Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                {{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>

            <h3 class="mt-5">Update User Password</h3>
            <form action="{{ route('admin.users.update-password', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="password">Bcrypted Password</label>
                    <input type="text" class="form-control" id="password" value="{{ old('email', $user->password) }}"
                        placeholder="Enter password" disabled>
                </div>


                <div class="mb-3">
                    <label class="form-label">New password</label>
                    <div class="input-group input-group-sm">
                        <input class="form-control" type="password" placeholder="Enter new password" name="password">
                        <span class="input-group-text p-0 bg-transparent">
                            <i class="ai-show p-2 w-40px" onclick="togglePasswordVisibility(this)"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <div class="input-group input-group-sm">
                        <input class="form-control" type="password" placeholder="Confirm password"
                            name="password_confirmation">
                        <span class="input-group-text p-0 bg-transparent">
                            <i class="ai-show p-2 w-40px" onclick="togglePasswordVisibility(this)"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update Password</button>
            </form>
        </div>
    </section>

@endsection

@section('footer_scripts')
    <script>
        function togglePasswordVisibility(icon) {
            const input = icon.parentElement.previousElementSibling;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("ai-show");
                icon.classList.add("ai-hide");
            } else {
                input.type = "password";
                icon.classList.remove("ai-hide");
                icon.classList.add("ai-show");
            }
        }
    </script>
@endsection
