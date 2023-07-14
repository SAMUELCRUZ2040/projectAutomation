@extends('layouts.sections')
@section('content')
@vite('resources/js/signUp.js')
<div id="preloader" class="preloader">
    <div class="loading-inner">
    </div>
    <div class="loading-inner2">
    </div>
</div>
<div class="row container-form">
    <div class="col-lg-12 content-form">
        <div class="container">
            <div class="tittle">
                <h3>
                    User information
                </h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                {{-- name --}}
    
                <div class="mb-4 form-group">
                    <input id="exampleInputEmail1" type="text" class="form-control animation-entry-field  form-input-transition @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required aria-describedby="emailHelp" autocomplete="name" autofocus placeholder=" ">
                    <label for="exampleInputEmail1" class="form-label animation-entry-field-label form-label-transition">{{ __('Name') }}</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
    
                  {{-- Username --}}
                  <div class="mb-4  form-group">
                    <input name="username" type="text" class="form-control form-input-transition @error('username') is-invalid @enderror" value="{{ old('username') }}" id="exampleInputEmail1"  aria-describedby="emailHelp" autofocus placeholder=" ">
                    <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('Username') }}</label>
    
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
    
                  {{-- Residence --}}
    
                  <div class="mb-4 row">
                    <div class="col-lg-6 d-flex flex-column">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Country of residence') }}</label>
                        <select class="form-input-transition" id="exampleInputEmail1" aria-describedby="emailHelp" name="pais">
                            <option value="argentina">Argentina</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="brasil">Brasil</option>
                            <option value="chile">Chile</option>
                            <option value="colombia">Colombia</option>
                            <option value="costa-rica">Costa Rica</option>
                            <option value="cuba">Cuba</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="el-salvador">El Salvador</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="haiti">Haití</option>
                            <option value="honduras">Honduras</option>
                            <option value="mexico">México</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="panama">Panamá</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="peru">Perú</option>
                            <option value="puerto-rico">Puerto Rico</option>
                            <option value="republica-dominicana">República Dominicana</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="venezuela">Venezuela</option>
                          </select>                      
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mt-2 form-group ">
                            <input name="city" type="text"  class="form-control form-input-transition @error('city') is-invalid @enderror" value="{{ old('city') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                            <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('City') }}</label>
    
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>
                    </div>
                  </div>
    
                  {{-- identification number and phone --}}
    
                  <div class="mb-2 row">
                    <div class="col-lg-6">
                        <div class="mb-2 form-group">
                            <input name="numberidentification" type="text" class="form-control form-input-transition @error('numberidentification') is-invalid @enderror" value="{{ old('numberidentification') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                            <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('Identification Number') }}</label>
                        </div>
    
                        @error('numberidentification')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
    
                    <div class="col-lg-6 form-group">
                        <div class="mb-2">
                            <input name="phone" type="text" class="form-control form-input-transition @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                            <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('phone') }}</label>
                        </div>
    
    
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>  
                  </div>
    
                  {{-- email --}}
    
                  <div class="mb-4 form-group">
                    <input id="email" type="email" class="form-control form-input-transition @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder=" ">
                    <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('Email address') }}</label>
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                  </div>
    
                  {{-- password --}}
    
                  <div class="mb-4 form-group">
                    <input id="password" type="password" class="form-control form-input-transition @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" ">
                    <label for="exampleInputPassword1" class="form-label form-label-transition">{{ __('password') }}</label>
    
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                  </div>
    
                  {{-- verify password --}}
                  <div class="mb-4 form-group">
                    <input id="password-confirm" type="password" class="form-control form-input-transition" name="password_confirmation" required autocomplete="new-password" placeholder=" ">
                    <label for="exampleInputPassword1" class="form-label form-label-transition">{{ __('Verify password') }}</label>
    
                </div>            
                <div class="container-button d-flex justify-content-center aligm-items-center">
                    <button id="effect-button" type="submit" class="btn fs-6" style="width: 15%">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
