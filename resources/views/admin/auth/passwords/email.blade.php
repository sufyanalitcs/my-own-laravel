@extends('admin.layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">{{ __('Reset Password') }}</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                        and we'll send you a link to reset your password!</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


                <form method="POST" class="user" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter Email Address...">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <button type="submit" class="btn btn-primary  btn-user btn-block">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </form>



                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                </div>
                <div class="text-center">
                    <a class="small"  href="{{ route('login') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
