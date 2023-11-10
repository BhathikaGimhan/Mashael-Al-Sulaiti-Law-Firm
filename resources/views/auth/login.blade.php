@extends('layouts.app')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-card border-0 shadow-sm card mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body cardbody-color rounded-3 p-lg-5">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/logo-transparent/mashael-login.png') }}"
                                    class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="120px"
                                    alt="profile" style="background-color: rgb(219, 217, 217)">
                                <h1>Sign In</h1>
                            </div>

                            <div class="mb-3">
                                <input id="email" type="email"
                                    class="form-control py-3 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email"
                                    autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control py-3 @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center"><button type="submit" class="btn btn-primary px-5 py-3 mb-5 w-100"
                                    style="font-size: 20px">Login</button>
                            </div>
                            {{-- <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                                Registered? <a href="#" class="text-dark fw-bold"> Create an
                                    Account</a>
                            </div> --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
