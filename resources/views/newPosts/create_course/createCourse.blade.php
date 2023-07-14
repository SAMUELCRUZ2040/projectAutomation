@extends('layouts.sections')
@section('content')

@include('layouts.loader')
@vite('resources/js/app.js')

  <div class="container-form container pt-0">
    <form action="{{route('create.course.store')}}" id="form-create-course" class="form-create-course pt-0" enctype="multipart/form-data" method="POST">
    @csrf
      @php
          $categories =  App\Models\Post::All();
      @endphp

        @foreach ($show as $category)
            <div class="col-lg-12 container-text-printipal mb-1">
                <div class="container">
                    <div id="container-letter" class="container-letter">
                        <span id="Effect-letter" style="font-size: 55px; font-weight: 900">Crea un nuevo curso en la categoría</span>
                    </div>
                </div>
            </div>
            @foreach ($categories as $post)
            @if ($category == $post -> id)
            <div class="col-lg-12 container-text-printipal mb-5">
                <div class="container">
                    <div id="container-letter" class="container-letter">
                        <span id="Effect-letter" style="font-size: 50px; font-weight: 100">{{$post-> CategorieName}}</span>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

        @endforeach


      <div class="mb-3 form-group">
        <input id="exampleInputEmail1" type="text" aria-describedby="emailHelp" class="form-control form-input-transition @error('NameCourse') is-invalid @enderror" name="NameCourse" value="{{ old('NameCourse') }}" required autocomplete="off" autofocus placeholder=" ">
        <label for="exampleInputEmail1" class="form-label  form-label-transition">{{ __('Name Course') }}</label>

            @error('NameCourse')
                <span class="invalid-feedback m-0" role="alert" style="font-size: 14px">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="mb-3 form-group">
          <input id="exampleInputEmail1" type="number" aria-describedby="emailHelp" class="form-control form-input-transition @error('coursePrice') is-invalid @enderror" name="coursePrice" value="{{ old('coursePrice') }}" required autocomplete="off" autofocus placeholder=" ">
          <label for="exampleInputEmail1" class="form-label form-label-transition">{{ __('course Price') }}</label>
    
                @error('coursePrice')
                    <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
  
        <div class="row mb-3">
          <label for="floatingTextarea2" class="col-md-4 form-label text-md-start">{{ __('Description Course') }}</label>
          <div class="col-md-12">
            <textarea class="form-control form-input-transition  @error('descriptionCourse') is-invalid @enderror" id="floatingTextarea2" name="descriptionCourse" style="height: 20px" value="{{ old('descriptionCourse') }}"></textarea>
              @error('descriptionCourse')
                  <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
  
        <div class="form-group">
          <label for="category_id">{{ __('category to create the course') }}</label>
          <select name="category_id" id="category_id" class="form-input-transition">
            @foreach ($showCategory as $course)
              <option value="{{$course -> CategorieName}}">{{$course-> CategorieName}}</option>
            @endforeach
          </select>        
        </div>

        <div class="row mt-3" id="group__file">
            <label for="exampleInputEmail1" class="" class="form-label text-md-end">{{ __('select an image:') }}</label>
            <div class="col-md-12">
              <input name="featuredCourse" id="featuredCourse"  type="file" id="verifyPasword" name="verifyPasword" autocomplete="off">
                @error('featuredCourse')
                    <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="container-button d-flex justify-content-center aligm-items-center">
            <button id="effect-button" type="submit" class="btn fs-6" style="width: 15%">CREAR</button>
          </div>
    </form>
  </div>
  
@include('layouts.footer')
@endsection

