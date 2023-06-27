@extends('layouts.sections')
@section('content')

@include('layouts.loader')
@vite('resources/js/showCourseCreate.js')

  <div class="container-form container">
    <form action="{{route('create.course.store')}}" id="form-create-course" class="form-create-course" enctype="multipart/form-data" method="POST">
    @csrf

        @foreach ($show as $category)
            <div class="col-lg-12 container-text-printipal mb-5">
                <div class="container">
                    <div id="container-letter" class="container-letter">
                        <span id="Effect-letter">Create a new course in the</span>
                    </div>
                </div>
            </div>
            @if ($category)
            <div class="col-lg-12 container-text-printipal mb-5">
                <div class="container">
                    <div id="container-letter" class="container-letter">
                        <span id="Effect-letter">{{$category}}</span>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

      <div class="row mb-3">
        <label for="exampleInputEmail1" class="col-md-4 form-label text-md-start">{{ __('Name Course') }}</label>
        <div class="col-md-12">
              <input id="exampleInputEmail1" type="text" aria-describedby="emailHelp" class="form-control @error('NameCourse') is-invalid @enderror" name="NameCourse" value="{{ old('NameCourse') }}" required autocomplete="NameCourse" autofocus>
  
              @error('NameCourse')
                  <span class="invalid-feedback m-0" role="alert" style="font-size: 14px">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              
          </div>
        </div>
  
        <div class="row mb-3">
          <label for="exampleInputEmail1" class="col-md-4 form-label text-md-start">{{ __('course Price') }}</label>
          <div class="col-md-12">
                <input id="exampleInputEmail1" type="number" aria-describedby="emailHelp" class="form-control @error('coursePrice') is-invalid @enderror" name="coursePrice" value="{{ old('coursePrice') }}" required autocomplete="coursePrice" autofocus>
    
                @error('coursePrice')
                    <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>
          </div>
  
        <div class="row mb-3">
          <label for="floatingTextarea2" class="col-md-4 form-label text-md-start">{{ __('Description Course') }}</label>
          <div class="col-md-12">
            <textarea class="form-control  @error('descriptionCourse') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" name="descriptionCourse" style="height: 100px" value="{{ old('descriptionCourse') }}"></textarea>
              @error('descriptionCourse')
                  <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
  
        <div class="form-group">
          <label for="category_id">{{ __('category to create the course') }}</label>
          <select name="category_id" id="category_id" class="form-control">
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
  
        <button type="submit" class="btn btn-primary mt-3 w-100 ">Create Course</button>
    </form>
  </div>
  
@include('layouts.footer')
@endsection

