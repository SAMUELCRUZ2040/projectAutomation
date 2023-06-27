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
    <div class="col-lg-4 publicity-Izy">
        <div class="tille">
            <h6>Promoted by</h6>
            <h1>Q-Vision Technologies</h1>
            <h1>S.A.S</h1>
        </div>
        <div class="motivation">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum culpa fugit.</p>
        </div>
        <div class="logo">
            <div class="container-logo">
                <img class="img-fluid" src="{{asset('img/SingUp/logo_360.png')}}" alt="">
            </div>
        </div>
        <div class="mini-description">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo tempora totam dolorem facere? Obcaecati ut beatae, commodi quis incidunt dolor hic necessitatibus quod sint nostrum. Eos, recusandae. Vel hic repudiandae quis neque veniam.</p>
        </div>
    </div>
    <div class="col-lg-8 content-form">
        <div class="tittle">
            <h3>
                User information
            </h3>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- name --}}

            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              {{-- Username --}}
              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">{{ __('Username') }}</label>
                <input name="username" type="text" class="form-control" value="{{ old('username') }}" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              {{-- Residence --}}

              <div class="mb-2 row">
                <div class="col-lg-6 d-flex flex-column">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Country of residence') }}</label>
                    <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pais">
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
                <div class="col-lg-6">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">{{ __('City') }}</label>
                        <input name="city" type="text"  class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" id="exampleInputEmail1" aria-describedby="emailHelp">

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
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Identification Number') }}</label>
                        <input name="numberidentification" type="text" class="form-control @error('numberidentification') is-invalid @enderror" value="{{ old('numberidentification') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    @error('numberidentification')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                </div>

                <div class="col-lg-6">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">{{ __('phone') }}</label>
                        <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>


                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  
              </div>

              {{-- email --}}

              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">{{ __('Email address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
              </div>

              {{-- password --}}

              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">{{ __('password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
              </div>

              {{-- verify password --}}
              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">{{ __('Verify password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>            
            
            <button type="submit" class="btn">SING UP</button>
        </form>
    </div>
</div>
@endsection
