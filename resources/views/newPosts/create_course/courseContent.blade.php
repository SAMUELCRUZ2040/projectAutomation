@extends('layouts.sections')
@section('content')

@include('layouts.loader')
@vite('resources/js/showCourseCreate.js')

<div id="container-show-posts" class="container-show-posts row">
  @foreach ($course as $coursesName)
    @if ($idCourse == $coursesName -> id )
        <div class="col-lg-12 container-text-printipal mb-5">
          <div class="container">
              <div id="container-letter" class="container-letter">
                  <span style="font-size: 45px"  id="Effect-letter">Explore what's there for</span>
              </div>
              <div id="container-letter" class="container-letter">
                  <span class="fs-1 fw-bold" id="Effect-letter">for you in {{$coursesName-> NameCourse}}</span>
              </div>
          </div>
        </div>
      @endif
  @endforeach
  </div>
  <div class="accordion container" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          What action do you want to perform?
        </button>  
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex justy-content-start align-items-start p-4" style="gap: 22px"> 
          <a href="{{ route('edit.course.posts', ['post' => $idCategory, 'course' => $idCourse , 'edit' => 'edit']) }}" class="btn btn-success">Edit card course</a>
          <form id="deleteForm" action="{{route('destroy.course.posts', ['post' => $idCategory, 'course' => $idCourse])}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-secondary delete-btn mb-5" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete Course</button>
          </form>
          @include('layouts.alert')
          <button class="btn btn-primary">Create Content Course</button>
          <button class="btn btn-warning">Edit content course </button>
        </div>
      </div>   
    </div>
  </div>
@include('layouts.footer')
@endsection