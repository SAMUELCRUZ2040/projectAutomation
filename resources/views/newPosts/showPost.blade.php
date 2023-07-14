@extends('layouts.sections')
@section('content')

@include('layouts.loader')

  @vite('resources/js/app.js')

<div id="container-show-posts" class="container-show-posts row">
  @foreach ($show as $posts)  
  <div class="col-lg-12 container-text-printipal">
    <div class="container">
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter">Explora lo que tenemos para ti</span>
      </div>
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter" style="font-size: 40px">En la categoria de {{$posts -> CategorieName}}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="container mb-5">
  <div class="container-select-category">
    <select class="form-select" style="width: 35%" onchange="redirectToUrl(this)">
        <option selected>Seleccione la categoría</option>
        @foreach ($showSelect as $course)
          <option value="{{ route('show.post', $course->id)}}">
            {{ $course->CategorieName }}
          </option>
        @endforeach
    </select>
  </div>
</div>

<script>
function redirectToUrl(selectElement) {
  var selectedOption = selectElement.value;
  window.location.href = selectedOption;
}
</script>

<div class="container-buttons-crud container mb-5">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          ¿Qué acción deseas realizar?
        </button>  
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex justy-content-start align-items-start p-4" style="gap: 22px">
          @foreach ($show as $posts)
            <a href="{{route('course.create', $posts)}}"  id="effect-button" >Create Course</a>
            <a href="{{route('edit.posts', $posts)}}"  id="effect-button" >Edit Category</a>
            <form id="deleteForm" action="{{ route('destroy.posts', $posts) }}" method="POST">
                @csrf
                @method('DELETE')
                <button id="effect-button" class="delete-btn" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" style="border: 0;background: none">Delete Category</button>
            </form>
            @include('layouts.alert')
         @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-printipal-courses d-flex justify-content-center align-items-cente">
  <div class="container-cards container row gy-5">
    @foreach ($show as $post)
      @php
        $filteredCourses = $showCourse->where('category_id', $post-> CategorieName);
      @endphp
      @foreach ($filteredCourses as $course)
        <div class="col-sm-7 col-md-7 col-lg-5 col-xl-4 col-xxl-4">
          <a href="/post/{{ $post->id }}/course/{{ $course->id }}">
            <div class="card-show mb-4">
              <div class="card-head-show">
                <div class="container-img">
                  <img class="img-fuid" src="{{ asset($course-> featuredCourse) }}" alt="">
                </div>
              </div>
              <div class="card-body-show">
                <div class="container-desription">
                  <p>{{ $course->category_id }}</p>
                  <p>{{ $course->created_at }}</p>
                  <h3 class="text-start fw-normal fs-4 tex-dark">{{ $course->NameCourse}}</h3>
                  <p>{{ $course->descriptionCourse }}</p>
                  <div class="container-button d-flex justify-content-center aligm-items-center">
                    <button id="effect-button" type="submit" class="btn fs-6" style="width: 100%">Buy Now ${{ $course->coursePrice }} USD</button>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    @endforeach
  </div>
</div>
@include('layouts.footer')
@endsection
