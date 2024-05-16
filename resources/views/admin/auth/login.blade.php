@extends('admin.layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Email') }}</label>
                        <input id="email" type="email"
                            class="form-control  form-control-user @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter Email Address...">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input class="form-check-input" type="checkbox" name="remember" id="customCheck"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        {{ __('Login') }}
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
