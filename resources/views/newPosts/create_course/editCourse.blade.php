@extends('layouts.sections')
@section('content')

@include('layouts.loader')
@vite('resources/js/showCourseCreate.js')

<div id="container-show-posts" class="container-show-posts row">
    <div class="accordion-body d-flex justy-content-start align-items-start p-4" style="gap: 22px"> 
        @foreach ($course as $coursesName)
        @if ($idCourse == $coursesName -> id )
            <div class="col-lg-12 container-text-printipal mb-5">
              <div class="container">
                  <div id="container-letter" class="container-letter">
                      <span style="font-size: 45px"  id="Effect-letter">¿Do you want to edit the course</span>
                  </div>
                  <div id="container-letter" class="container-letter">
                      <span class="fs-1 fw-bold" id="Effect-letter">{{$coursesName-> NameCourse}}?</span>
                  </div>
              </div>
            </div>
          @endif
        @endforeach
  </div>
</div>

    <div id="container-form-edit-course" class="container-form-edit-course container">
        <div class="row">
            <div class="col-lg-8 form d-flex justify-content-center align-items-start">
                <form action="{{route('update.course.posts', ['post' => $idCategory, 'course' => $idCourse , 'edit' => 'edit'])}}" method="POST" class="formularios w-100" id="formularios" enctype="multipart/form-data">
                    @csrf @method('PATCH')
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
                      
                      <div class="form-group">
                        <label for="category_id">{{ __('category to create the course') }}</label>
                        <select name="category_id" id="category_id" class="form-control">
                          @foreach ($showCategory as $courseOption)
                            <option value="{{$courseOption  -> CategorieName}}">{{$courseOption -> CategorieName}}</option>
                          @endforeach
                        </select>        
                      </div>

                    <div class="row mb-3">
                      <label for="floatingTextarea2" class="col-md-4 form-label text-md-start">{{ __('Description Course') }}</label>
                      <div class="col-md-12">
                        <textarea class="form-control  @error('descriptionCourse') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" name="descriptionCourse" style="height: 300px" value="{{ old('descriptionCourse') }}"></textarea>
                          @error('descriptionCourse')
                              <span class="invalid-feedback m-0" role="alert" style="font-size: 14px; display: block;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
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
              
                    <button type="submit" class="btn btn-primary mt-3 w-100 ">Edit Course</button>
                </form>
                @include('layouts.alertEdit')
            </div>
            <div class="col-lg-4 display-letter">
                @foreach ($course as $coursesName)
                    @if ($idCourse == $coursesName -> id )
                    <div class="card-show mb-4">
                        <div class="card-head-show">
                        <div class="container-img">
                            <img class="img-fuid" src="{{ asset($coursesName -> featuredCourse)}}" alt="">
                        </div>
                        </div>
                        <div class="card-body-show">
                        <div class="container-desription" style="text-align: justify">
                            <p>{{$coursesName -> category_id}}</p>
                            <p>{{$coursesName -> created_at}}</p>
                            <h3>{{$coursesName -> NameCourse}}</h3>
                            <p>{{$coursesName -> descriptionCourse}}/h3>
                            <button class="btn btn-primary w-100 mt-4">Buy Now ${{$coursesName -> coursePrice}} USD</button>
                        </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> 
@include('layouts.footer')
@endsection