@extends('layouts.sections')
@section('content')
@include('layouts.loader')
@vite('resources/js/showCourseCreate.js')
  {{-- Form  posts --}}
  <div class="col-lg-12 container-text-printipal mt-5">
    <div class="container">
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter">Crea una nueva categoria</span>
      </div>
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter">para almacenar tus cursos</span>
      </div>
    </div>
  </div>
  <div id="container-form" class="container-form container" style="height: calc(100vh - 40vh)">
    <form action="{{route('posts.store')}}"  method="POST" class="formulario w-100" id="formulario" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="" class="form-label text-md-end">{{ __('Categorie Name:') }}</label>
          <input id="CategorieName" name="CategorieName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      
        <div class="container-check d-flex flex-column mt-2">
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
            <input name="featured" id="featured"  type="file" id="verifyPasword" name="verifyPasword" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary mt-3 w-100 ">Create</button>
    </form>
</div>

@include('layouts.footer')
@endsection