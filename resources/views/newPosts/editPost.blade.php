@extends('layouts.sections')
@section('content')
@include('layouts.loader')
<div class="container h-100">
  <div class="row w-100 h-100">

    {{-- show card category --}}

    @foreach ($show as $post)
    
    {{-- Titlle --}}
      <span class="fs-1 mt-5 pt-5 fw-bold">¿Do you want to modify the {{$post -> CategorieName}} category? </span>

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
                </div>
                <div class="start-course">
                  @if ($post -> flexRadioDefault === 'Easy')
                  <ul class="star d-flex flex-row justify-content-center" style="list-style: none">
                    <li class="item-star">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-regular fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-regular fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-regular fa-star"></i>
                    </li>
                  </ul>
                  @elseif ($post -> flexRadioDefault === 'Medium')
                  <ul class="star d-flex flex-row justify-content-center" style="list-style: none">
                    <li class="item-star">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-regular fa-star"></i>
                    </li>
                  </ul>
                  @elseif ($post -> flexRadioDefault === 'Difficult')
                  <ul class="star d-flex flex-row justify-content-center" style="list-style: none">
                    <li class="item-star">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="item-star ms-2">
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </li>
                  </ul>
                  @endif
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

            <div class="row mb-3">
              <label for="exampleInputEmail1" class="" class="form-label text-md-end">{{ __('Categorie Name:') }}</label>
              <div class="col-md-12">
                  <input id="exampleInputEmail1" type="text" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="CategorieName" value="{{ old('CategorieName') }}" required autocomplete="CategorieName" autofocus>
                  @error('CategorieName')
                      <span class="invalid-feedback" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          {{-- level stars --}}

          <div class="container-check d-flex flex-column mt-2">
            <label for="exampleInputEmail1" class="" class="form-label text-md-end">{{ __('Select the level') }}</label>
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
              <input name="featured" id="featured"  type="file" id="verifyPasword" name="verifyPasword" autocomplete="off" value="{{$posts -> featured}}">
                @error('featured')
                    <span class="invalid-feedback" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

            <button class="btn btn-primary modify-btn mt-4 w-100" type="submit" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Modify category</button>
          </form>
        @include('layouts.alertEdit')
      @endforeach
    </div>
  </div>
</div>
@endsection