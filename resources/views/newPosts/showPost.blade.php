@extends('layouts.sections')
@section('content')

@include('layouts.loader')

  @vite('resources/js/showCourseCreate.js')

<div id="container-show-posts" class="container-show-posts row">
  @foreach ($show as $posts)  
  <div class="col-lg-12 container-text-printipal">
    <div class="container">
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter">Explore what's there for</span>
      </div>
      <div id="container-letter" class="container-letter">
        <span id="Effect-letter">for you in {{$posts -> CategorieName}}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="container mb-5">
  <div class="container-select-category">
    <select class="form-select" style="width: 35%" onchange="redirectToUrl(this)">
        <option selected>Select the category</option>
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
          What action do you want to perform?
        </button>  
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex justy-content-start align-items-start p-4" style="gap: 22px">
          @foreach ($show as $posts)
            <a href="{{route('course.create', $posts)}}" id="Create-course" class="btn btn-primary mb-5">Create Course</a>
            <a href="{{route('edit.posts', $posts)}}" class="btn btn-warning mb-5">Edit Category</a>
            <form id="deleteForm" action="{{ route('destroy.posts', $posts) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-secondary delete-btn mb-5" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete Category</button>
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
                  <h3>{{ $course->CategorieName}}</h3>
                  <p>{{ $course->descriptionCourse }}</p>
                  <button class="btn btn-primary">Buy Now ${{ $course->coursePrice }} USD</button>
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
