@extends('layouts.sections')
@section('content')
@include('layouts.loader')
@vite('resources/js/app.js')
  {{-- Form  posts --}}

  <div id="container-form" class="container-form container" style="height: calc(100vh - 40vh); margin-bottom: 10vh;">
    <form action="{{route('posts.store')}}"  method="POST" class="formulario w-100" id="formulario" enctype="multipart/form-data">
      @csrf
      <div class="container-text-printipal mt-5 mb-5">
        <div class="container">
          <div id="container-letter" class="container-letter">
            <span id="Effect-letter">Crea una nueva categoria</span>
          </div>
          <div id="container-letter" class="container-letter">
            <span id="Effect-letter">para tus cursos</span>
          </div>
        </div>
      </div>
      
        <div class="mb-3 form-group">
            <input name="CategorieName" type="text" class="form-control form-input-transition @error('CategorieName') is-invalid @enderror" value="{{ old('CategorieName') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " autocomplete="off">
            <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('Nombre Categoria') }}</label>
            @error('CategorieName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3 form-group">
          <input name="descriptionCategory" type="text" class="form-control form-input-transition @error('descriptionCategory') is-invalid @enderror" value="{{ old('descriptionCategory') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " autocomplete="off">
          <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('Descripcion de la categoria') }}</label>
          @error('descriptionCategory')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

        <div class="container-check d-flex flex-row mt-2">
          <div class="form-check me-3">
              <input value="Easy" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label  class="form-check-label" for="flexRadioDefault1">
                  Easy - 2 Start
              </label>
            </div>
            <div class="form-check me-3">
              <input value="Medium" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label  class="form-check-label" for="flexRadioDefault2">
                Medium - 3/2 Start
              </label>
            </div>
            <div class="form-check">
              <input value="Difficult" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Difficult - 4/2 Start
              </label>
            </div>
        </div>

        <div class="form-group-file mt-3" id="group__file">
            <input class="img-input" name="featured" id="featured"  type="file" name="verifyPasword" autocomplete="off">
        </div>

        <div class="container-button d-flex justify-content-center aligm-items-center">
          <button id="effect-button" type="submit" class="btn fs-6" style="width: 15%">CREAR</button>
        </div>
    </form>
</div>

@include('layouts.footer')
@endsection