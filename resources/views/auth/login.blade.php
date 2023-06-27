@extends('layouts.sections')
@section('content')
<div id="preloader" class="preloader">
    <div class="loading-inner">
    </div>
    <div class="loading-inner2">
    </div>
</div>
<div class="container  h-100 ">
    <div class="row justify-content-center h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-8 h-100 d-flex justify-content-center align-items-center">
            <form method="POST" action="{{ route('login') }}"  class="w-100 rounded-3 h-70 d-flex flex-column justify-content-center p-5" style="border: 1px solid #00000037">
                <div class="tittle">
                    <h3 class="fs-4 mb-4 fw-bold">Login</h3>
                </div>
                @csrf
                <div class="row mb-3">
                    <label for="exampleInputEmail1" class="" class="col-md-4 form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-12">
                        <input id="exampleInputEmail1" type="email" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputPassword1" class="" class="col-md-4 form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-12">
                        <input id="exampleInputPassword1" type="password" aria-describedby="emailHelp" name="password" class="form-control  @error('password') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 p-0">
                    <div class="col-md-12 offset-md-4 ms-0">
                        <div class="form-check ms-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-12 offset-md-4 d-flex ms-0">
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
@endsection
