@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div class="col-lg-7 col-xl-6 col-xxl-6 container-img order-2">
    <div class="animation">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_vktpsg4v.json"  background="transparent"  speed="1"  style="width: 650px; height: 650px;"  loop  autoplay></lottie-player>
    </div>
</div>
<div class="col-lg-7 col-xl-6 col-xxl-6 container-description order-1">
    <div class="container-text">
        <div class="tittle mb-3">

        </div>
        <div class="mini-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptate, accusantium adipisci neque repudiandae molestias voluptatum voluptas officiis quia et nostrum odit, illum autem quidem veritatis dignissimos sint illo provident. Quisquam recusandae ab enim architecto fuga, adipisci quo dicta ullam sequi quaerat quidem mollitia aspernatur vero ratione facilis tempore debitis?</p>
        </div>
        <div class="links">
            <button id="btn" class="btn"> SHOP NOW</button>
            <button id="btn-form" class="btn"> PUBLISH ARTICLE</button>
        </div>
    </div>
</div>
<style>
    /* post */
    .container-posts .container-img{
    padding: 0;
}

.container-posts .container-img .animation{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-posts .container-description .container-text{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}


.container-posts .container-description .container-text .tittle h1{
    font-size: 50px;
    font-weight: 900;
    letter-spacing: 1px;
    line-height: 45px;
    color: var(--main-color);
    opacity: 0;
    transform: scale(0);
    transform-origin: right;

}
.container-posts .container-description .container-text .mini-description p{
    text-align: justify;
    position: relative;
    margin-bottom: 4vh;
    padding: 0 9vh;
    transform: scale(0);
    opacity: 0;
    transform-origin: left;
}

.container-posts .container-description .container-text .mini-description p::before{
    content: '';
    position: absolute;
    width: 20%;
    height: 1px;
    top: 115%;
    left: 0;
    background: var(--main-color);
    transform: scale(0);
    opacity: 0;
    transform-origin: left;
    margin: 0 9vh;

}
.container-posts .container-description .links{
    transform: scale(0);
    opacity: 0;
    transform-origin: right;
}
.container-posts .container-description .links button{
    border-radius: 0;
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: 2vh;
    padding: 6px 4vh;
    border: 1px solid var(--main-color);
    transition: all .4s ease-in-out;
}

.container-posts .container-description .links button:last-child{
    margin-left: 2vh;
}

.container-posts .container-description .links button:hover{
    background: var(--main-color);
    color: #fff;
}

.container-posts .container-img  .animation{
    transform: scale(0);
    opacity: 0;
    transform-origin: center;
}


</style>

<div class="col-sm-7 col-md-7 col-lg-5 col-xl-4 col-xxl-4">
    <div class="card mb-4">
      <div class="container-img">
        <img src="{{asset($post -> featured)}}" class="card-img-top" alt="...">
      </div>
        <div data-id="{{$post -> id}}" class="card-body">
          <div class="row">
            <div class="col-lg-12 text-start">
              <h5 class="card-title">{{$post -> nameCourse }}</h5>
            </div>
          </div>
          <div class="row mb-2">

          </div>
        </div>
        <div class="container-star row">
          <div class="col-sm-4 col-md-4 col-lg-4">
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
          <div class="col-sm-5 col-md-5 col-lg-5 text-center">
            <p class="card-text">{{$post -> flexRadioDefault}}</p>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 text-center">
            <p class="card-text">{{$post -> cours_hours}} hours</p>
          </div>
        </div>
        <div class="card-footer d-flex">
          <a href="#" class="btn btn-secondary w-80 d-flex justify-content-around aling-items-center">
            <span>
              <span class="fw-bold"> {{$post -> course_price}} </span><span style="font-size: 12px" class="fw-bold ms-1">USD</span>
            </span>
            <span class="ms-2">
                BUY COURSE
            </span>
              </a>
              <a  class="fw-normal btn btn-secondary w-20 ms-5" href="">View Course</a>
        </div>
  </div>
</div>




<div class="skip">
    <i id="skips" class="fa-solid fa-xmark"></i>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name categorie:</label>
    <input id="nameCourse" name="nameCourse" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">name of the professional</label>
      <input id="NameProfessional" name="NameProfessional" type="text" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-2 row">
      <div class="col-lg-6 d-flex flex-column">
          <label for="exampleInputEmail1" class="form-label">Type</label>
          <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="generalTheme">
            <option value="automation">Automation</option>
            <option value="development">Development</option>
            <option value="programming logic">Programming Logic</option>
            <option value="data science">Data Science</option>
            <option value="web design">Web Design</option>
            <option value="artificial intelligence">Artificial Intelligence</option>
            <option value="machine learning">Machine Learning</option>
            <option value="cybersecurity">Cybersecurity</option>
            <option value="cloud computing">Cloud Computing</option>
            <option value="internet of things">Internet of Things</option>
            <option value="networking">Networking</option>
            <option value="database management">Database Management</option>
            <option value="mobile app development">Mobile App Development</option>
            <option value="game development">Game Development</option>
            <option value="virtual reality">Virtual Reality</option>
            <option value="augmented reality">Augmented Reality</option>
            <option value="blockchain">Blockchain</option>
            <option value="quantum computing">Quantum Computing</option>
            <option value="robotics">Robotics</option>
            <option value="nanotechnology">Nanotechnology</option>
            </select>                      
      </div>
      <div class="col-lg-6">
          <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">City</label>
              <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="course_category">
                <option value="front-end">Front End</option>
                <option value="back-end">Back End</option>
                <option value="full-stack">Full Stack</option>
                <option value="data-science">Data Science</option>
                <option value="artificial-intelligence">Artificial Intelligence</option>
                <option value="mobile-development">Mobile Development</option>
                <option value="game-development">Game Development</option>
                <option value="cybersecurity">Cybersecurity</option>
                <option value="cloud-computing">Cloud Computing</option>
                <option value="blockchain">Blockchain</option>
                <option value="devops">DevOps</option>
                <option value="internet-of-things">Internet of Things (IoT)</option>
                <option value="ui-ux-design">UI/UX Design</option>
                <option value="digital-marketing">Digital Marketing</option>
                <option value="business">Business</option>
                <option value="entrepreneurship">Entrepreneurship</option>
                <option value="leadership">Leadership</option>
                <option value="project-management">Project Management</option>
                <option value="communication-skills">Communication Skills</option>
                <option value="career-development">Career Development</option>   
              </select>  
          </div>
      </div>
    </div>
    <div class="mb-2 row">
      <div class="col-lg-6">
          <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Course price</label>
              <input name="course_price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
      </div>
      <div class="col-lg-6">
          <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">course hours</label>
              <input name="cours_hours" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
      </div>  
    </div>

  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="description" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Description</label>
  </div>

  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="requirements" style="height: 100px"></textarea>
    <label for="floatingTextarea2">requirements</label>
  </div>
    
  <div class="container-check d-flex mt-2">
    <div class="form-check me-3">
        <input value="Easy" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label  class="form-check-label" for="flexRadioDefault1">
            Easy
        </label>
      </div>
      <div class="form-check me-3">
        <input value="Medium" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label  class="form-check-label" for="flexRadioDefault2">
          Medium
        </label>
      </div>
      <div class="form-check">
        <input value="Difficult" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Difficult
        </label>
      </div>
  </div>

  <div class="form-group-file mt-3" id="group__file">
      <input name="featured" id="featured"  type="file" id="verifyPasword" name="verifyPasword" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary mt-3 w-100 ">Post</button>




  <div id="container-show-posts" class="container h-80 " style="height: 80vh; padding: 0">
    @foreach ($show as $posts)  
    <div class="title-course text-start  w-100" style="margin-top: 8vh">
        <h1 class="fw-bold fs-1">{{$posts -> nameCourse}}</h1>
    </div>
        <div id="container-view-course" class="row container-view-course p-5" style="width: 100%; margin: 0" >
            <div class="col-lg-9">
                 <div class="container-teacher">
                    <p>{{$posts -> NameProfessional}} <span class="ms-3">{{$posts -> created_at}}</span></p>
                 </div>
                 <div class="container-img ">
                    <img style="opacity: 0.8;" class="img-fluid rounded-3 w-100" src="{{asset($posts -> featured)}}" class="card-img-top" alt="...">
                 </div>
                 <div class="container-description-course mt-4 pe-4 p-4" style="border: 1px solid #00000026; border-radius: 1vh">
                    <h2 class="fw-normal fs-4 mb-3" >Description Course</h2>
                    <p class="fst-normal mb-4">{{$posts -> description}}</p>
                    <div class="requirements">
                        <h2 class="fw-normal fs-4 mb-3" >Requirements</h2>
                        <p class="fst-normal mb-4">{{$posts -> requirements}}</p>
                    </div>
                    <div class="level mb-4">
                        <h2 class="fw-normal fs-4 mb-3" >Level</h2>
                        <div id="container-level" class="container-level d-flex">
                            <p class="fst-normal">{{$posts -> flexRadioDefault}}</p>
                            @if ($posts -> flexRadioDefault === 'Easy')
                                <ul class="star d-flex flex-row" style="list-style: none">
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
                                @elseif ($posts -> flexRadioDefault === 'Medium')
                                <ul class="star d-flex flex-row" style="list-style: none">
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
                                @elseif ($posts -> flexRadioDefault === 'Difficult')
                                <ul class="star d-flex flex-row" style="list-style: none">
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
                    <div class="soport mb-4">
                        <h2 class="fw-normal fs-4 mb-3" >Support information</h2>
                        <p class="ms-4" style="font-size: 14px"> izyacademy@qvision.us </p>
                    </div>
                    <div class="hours">
                        <h2 class="fw-normal fs-4 mb-3" >hours of dedication</h2>
                        <p>The course lasts {{$posts -> course_price}} hours to be developed by the student.</p>
                    </div>
                 </div>
            </div>

             <div class="col-lg-3 pt-4 mb-4">
                <div id="card" class="card rounded-0 w-100" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <h3>Course features</h3>
                         General Theme <span class="ms-2">{{$posts -> generalTheme}}</span>
                      </li>
                      <li class="list-group-item">Category <span class="ms-2">{{$posts -> course_category}}</span></li>
                      <li class="list-group-item">Price <span class="ms-2">{{$posts -> course_price}}</span></li></li>
                      <li class="list-group-item">Hours <span class="ms-2">{{$posts -> cours_hours}}</span></li></li>
                    </ul>
                </div>
             </div>
             <div class="container container-buttoms mt-5 d-flex">
                <a class="btn btn-warning" href="{{ route('edit.posts', $posts)}}">Edit</a>
                <form id="deleteForm" action="{{ route('destroy.posts', $posts) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger delete-btn ms-2" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete</button>
                </form>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar el curso {{$posts -> nameCourse}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        var confirmDeleteModal = document.getElementById('confirmDeleteModal');
        var confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
      
        confirmDeleteBtn.addEventListener('click', function() {
            var deleteForm = document.getElementById('deleteForm');
            $('#confirmDeleteModal').modal('hide');
            deleteForm.submit();
        });
    </script>
</div>









<div class="container-toogle-menu">
  <div class="toogle_menu" id="toogle-menu">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
  </div>
</div>
