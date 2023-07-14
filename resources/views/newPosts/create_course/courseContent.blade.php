@extends('layouts.sections')
@section('content')

@include('layouts.loader')
@vite('resources/js/app.js')

<div id="container-show-posts" class="container-show-posts row">
  @foreach ($course as $coursesName)
    @if ($idCourse == $coursesName -> id )
        <div class="col-lg-12 container-text-printipal mb-5">
          <div class="container text-center">
              <div id="container-letter" class="container-letter">
                  <span class="fw-bold" id="Effect-letter" style="font-size: 50px">{{$coursesName-> NameCourse}}</span>
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
          ¿Qué acción deseas realizar?
        </button>  
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex justy-content-start align-items-start p-4" style="gap: 22px"> 
          <a href="{{ route('edit.course.posts', ['post' => $idCategory, 'course' => $idCourse , 'edit' => 'edit']) }}" id="effect-button" type="submit" class="btn fs-6">Editar card del curso</a>
          <form id="deleteForm" action="{{route('destroy.course.posts', ['post' => $idCategory, 'course' => $idCourse])}}" method="POST">
            @csrf
            @method('DELETE')
            <button id="effect-button" type="submit" class="btn fs-6" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Borrar Curso</button>
          </form>
          @include('layouts.alert')
            <button id="effect-button" type="submit" class="btn fs-6">Crear Contenido</button>
        </div>
      </div>   
    </div>
  </div>
@include('layouts.footer')
@endsection