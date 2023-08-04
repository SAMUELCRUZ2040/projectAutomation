@extends('layouts.sections')
@section('content')
@include('layouts.loader')
@vite('resources/js/app.js')
<div class="container  h-100 container-login">
    <div class="tittle">
        <h3 class="fs-4 mb-4 fw-bold" style="font-family: cursive">Login</h3>
    </div>
    <div class="container-img">
        <img class="img-fluid" src="https://assets.website-files.com/5d5d5904f8a21bfe5ff69367/601490af893a7fbcadb82d51_swinging.svg" alt="">
    </div>
    <div class="container-img-two">
        <img src="{{asset('img/image-collection/login/Squiggles - Colorful.png')}}" alt="" class="imf-fluid">
    </div>
    <form method="POST" action="{{ route('login') }}"  class="w-100 rounded-3 h-70 d-flex flex-column justify-content-center p-5">
        @csrf

        <div class="mb-3 form-group">
            <input id="exampleInputEmail1" type="email" aria-describedby="emailHelp" class="form-control form-input-transition @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder=" ">
            <label for="exampleInputEmail1" class="form-label text-md-end form-label-transition">{{ __('Email Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <input id="exampleInputPassword1" type="password" aria-describedby="emailHelp" name="password" class="form-control  form-input-transition @error('password') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="off" placeholder=" ">
            <label for="exampleInputPassword1" class=" form-label text-md-end form-label-transition">{{ __('Password') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
        <div class="container-button d-flex justify-content-start aligm-items-start flex-column">
            <button id="effect-button" type="submit" class="btn fs-5" style="width: 20%">Login</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link text-start" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
