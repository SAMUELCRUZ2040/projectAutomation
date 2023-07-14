@extends('layouts.sections')
@section('content')
@include('layouts.loader')
@vite('resources/js/app.js')

<div class="container h-100">
  <div class="row w-100 h-100">
    {{-- show card category --}}

    @foreach ($show as $post)
    
    {{-- Titlle --}}
    <div id="container-posts" class="row container-posts">
      <div class="col-lg-12 container-text-printipal d-flex align-items-end">
        <div class="container">
          <div id="container-letter" class="container-letter text-center">
            <span id="Effect-letter" style="font-size: 38px">¿Deseas Modificar la categoría de  {{$post -> CategorieName}} ?</span>
          </div>
        </div>
      </div>
    </div>
      <div class="col-lg-6 order-2 show-card-category">
        {{-- Level stars --}}
        <div class="container-cards container row gy-5">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <a href="/post/{{ $post -> id}}">
              <div class="card mb-4">
                <div class="card-head">
                  <div class="container-img">
                    <img class="img-fuid" src="{{asset($post -> featured)}}" alt="">
                  </div>
                </div>
                <div class="card-body">
                  <h3>{{ $post -> CategorieName }} </h3>
                  <p class="mt-3" style="text-align: justify">
                    {{ $post -> descriptionCategory }}
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      @endforeach

      {{-- container form --}}

    <div class="col-lg-6 order-1 container-edit-category">
      @foreach ($show as $posts)  

        <form action="{{route('update.posts', $posts)}}"  method="POST" class="formularios" id="formularios" enctype="multipart/form-data">

            @csrf @method('PATCH')

            {{-- Category Name --}}
                
            <div class="mb-3 form-group">
              <input id="exampleInputEmail1" type="text" aria-describedby="emailHelp" class="form-control form-input-transition @error('email') is-invalid @enderror" name="CategorieName" value="{{ old('CategorieName') }}" required autocomplete="off" autofocus placeholder=" ">
              <label for="exampleInputEmail1"  class="form-label text-md-end form-label-transition">{{ __('Nombre categoria') }}</label>
                @error('CategorieName')
                    <span class="invalid-feedback" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 form-group">
              <input id="exampleInputEmail1" type="text" aria-describedby="emailHelp" class="form-control form-input-transition @error('descriptionCategory') is-invalid @enderror" name="descriptionCategory" value="{{ old('descriptionCategory') }}" required autocomplete="off" autofocus placeholder=" ">
              <label for="exampleInputEmail1"  class="form-label text-md-end form-label-transition">{{ __('Descripcion de la categoria') }}</label>
                @error('descriptionCategory')
                    <span class="invalid-feedback" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

          {{-- level stars --}}

          <div class="container-check d-flex flex-row mt-2">
            <div class="form-check me-3">
                <input value="Easy" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                <label  class="form-check-label" for="flexRadioDefault1">
                    Easy - 2 Start
                </label>
              </div>
              <div class="form-check me-3">
                <input value="Medium" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked required>
                <label  class="form-check-label" for="flexRadioDefault2">
                  Medium - 3/2 Start
                </label>
              </div>
              <div class="form-check">
                <input value="Difficult" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked required>
                <label class="form-check-label" for="flexRadioDefault2">
                  Difficult - 4/2 Start
                </label>
              </div>
              @error('flexRadioDefault')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>

          {{-- Img --}}

          <div class="row mt-3" id="group__file">
            <label for="exampleInputEmail1" class="" class="form-label text-md-end">{{ __('select an image:') }}</label>
            <div class="col-md-12">
              <input name="featured" id="featured" class="img-input"  type="file" id="verifyPasword" name="verifyPasword" autocomplete="off" value="{{$posts -> featured}}">
                @error('featured')
                    <span class="invalid-feedback" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="container-button d-flex justify-content-center aligm-items-center mt-5">
            <button id="effect-button" type="submit" class="btn fs-6" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" style="width: 25%">Modificar</button>
          </div>
          </form>
        @include('layouts.alertEdit')
      @endforeach
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection