@extends('admin.layouts.auth')

@section('content')
    <div class="row ">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group  "> 
                        <label for="password" class=" col-form-label text-md-end">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" 
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Email') }}</label>
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}" 
                            placeholder="Email Address" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>
                        <input id="password" type="password"
                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Password Confirmation') }}</label>
                        <input id="password-confirm" type="password" class="form-control form-control-user"
                                name="password_confirmation" placeholder="Password Confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>
 
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        {{ __('Register') }}
                    </button>


                </form>
                <hr>
                <div class="text-center">
                    <a class="small"  href="{{ route('password.request') }}"  >Forgot Password?</a>
                </div>
                <div class="text-center"> 
                    <a class="small"  href="{{ route('login') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
