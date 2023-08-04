@extends('layouts.sections')
@section('content')
@vite('resources/js/app.js')
@include('layouts.loader')
  {{-- front page --}}
  <div id="container-posts" class="row container-posts">
    <div class="col-lg-12 container-text-printipal">
      <div class="container">
        <div id="container-letter" class="container-letter">
          <span id="Effect-letter">Explora</span>
        </div>
        <div id="container-letter" class="container-letter">
          <span id="Effect-letter">Lo que tenemos para ti</span>
        </div>
      </div>
    </div>
  </div>
  {{-- card published post --}}
    <div id="container-articles" class="container-articles">
      <div class="container-buttons-crud container mb-5">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                ¿Qué acción deseas realizar?
              </button>  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="container-create d-flex justiyfy-conten-start align-items-start p-4">
                <a href="{{route('post.create')}}" id="effect-button" class="btn">
                  Create Category
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-tittle container text-center mb-5 mt-5">
        <span class="fs-1 fw-bold">Nuestras Categorías de Cursos</span>
        <div class="container-counter ms-3 d-flex justify-content-start align-items-center">
          <span class="fs-2 fw-bold">
            <i class="fa-solid fa-scroll fs-3" style="-webkit-text-stroke: 1px #000; color: transparent"></i>
              {{ $postCount }}
          </span>
        </div>
      </div>
      <div class="container-cards container row gy-5">
          @foreach ($posts as $post)
            <div class="col-sm-7 col-md-7 col-lg-5 col-xl-4 col-xxl-4">
              <a href="/post/{{ $post -> id}}">
                <div class="card mb-4">
                  <div class="card-head">
                    <div class="container-img">
                      <img class="img-fuid" src="{{asset($post -> featured)}}" alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <h3>{{ $post -> CategorieName }} </h3>
                    <p class="mt-3" style="text-align: justify">
                      {{ $post -> descriptionCategory }}
                    </p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
      </div>
  </div>
  {{-- Cards categories courses IzyAcademy  --}}
  <div id="container-cards-categories" class="container-cards-categories container">
    {{-- tittle --}}
    <div class="mini-description container mt-5">
      <span class="fs-1 fw-bold">Prepárate para crecer profesionalmente</span>
    </div>
    {{-- mini-menu cards --}}
      <div id="container-options" class="row container container-options">
        <ul class="list-options">
          <li data-filter="scrum" class="item active">Scrum</li>
          <li data-filter="automation" class="item">Automation</li>
          <li data-filter="científico-de-datos" class="item">Científico de Datos</li>
          <li data-filter="Agile" class="item">Agile</li>
          <li data-filter="programming" class="item">Programming</li>
        </ul>
      </div>
      {{-- cards --}}
        <div class="container container-printipal-cards-publicity">
          {{-- scrum --}}
          <div class="separator">
            <div class="row container-cards-courses-izy">
              {{-- scrum --}}
  
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=151" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-1.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Scrum Developer Professional Certificate</h3>
                </div>
                  <h2>Scrum Developer Professional Certificate</h2>
                  <p>Being certified as a Scrum Developer is an opportunity to strengthen the professional profile of a developer who participates in a work team using the Scrum framework.</p>
              </div>
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=149" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-2.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Product Owner Professional Certificate</h3>
                </div>
                  <h2>Product Owner Professional Certificate</h2>
                  <p>Being certified as a Product Owner is an opportunity for job visibility, since companies that implement the Scrum methodology require people who can ensure customer satisfaction.</p>
              </div>
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=150" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-3.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Scrum Master Professional Certificate</h3>
                </div>
                  <h2>Scrum Master Professional Certificate</h2>
                  <p>Being certified as a Scrum Master is an opportunity to strengthen the job profile of a professional who participates in a work team using the Scrum framework.</p>
              </div>
            </div>
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=167" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-4.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Scrum Foundation Professional Certificate</h3>
                </div>
                  <h2>Scrum Foundation Professional Certificate</h2>
                  <p>Getting certified as a Scrum Foundation is an opportunity to strengthen the job profile of a professional who participates in a work team using the Scrum framework.</p>
              </div>
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=5" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-5.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Fundamentos de Scrum (Certificado)</h3>
                </div>
                  <h2>Fundamentos de Scrum (Certificado)</h2>
                  <p>Scrum is based on the incremental development of the project requirements in short and fixed time blocks, therefore the Scrum Fundamentals certification course is designed to help the student know</p>
              </div>
              <div class="card-courses-izy col-lg-3 scrum active">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=122" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/img-6.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Scrum Master (Demo)</h3>
                </div>
                  <h2>Scrum Master (Demo)</h2>
                  <p>The Scrum Master course is designed to help the student learn about the agile methodological structure, in addition to learning about the key concepts to ensure the delivery of successful projects.</p>
              </div>
            </div>
          </div>
          
          {{-- automation --}}

          <div class="separator">
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=176" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-1.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Selenium WebDriver con Page Object Model</h3>
                </div>
                  <h2>Selenium WebDriver con Page Object Model</h2>
                  <p>Software test automation saves companies time and reduces errors. In this course you will develop skills in the use of Selenium WebDriver</p>
              </div>
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=175" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-2.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Selenium con Screenplay</h3>
                </div>
                  <h2>Selenium con Screenplay</h2>
                  <p>This course is suitable for those who are interested in automating their tests, gaining knowledge about Screenplay and making use of good practices.</p>
              </div>
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=183" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-3.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Pruebas Automatizadas de Servicios Web</h3>
                </div>
                  <h2>Pruebas Automatizadas de Servicios Web</h2>
                  <p>This course is focused on providing the necessary concepts for the execution of service tests (API Testing), from the concepts, structure of a web service to the creation, configuration of projects in Java</p>
              </div>
            </div>
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=216" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-4.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Serenity BDD</h3>
                </div>
                  <h2>Serenity BDD</h2>
                  <p>Serenity BDD is a testing framework oriented on the BDD development methodology. It focuses on the generation of "Living Documentation" reports.</p>
              </div>
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=163" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-5.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Cypress</h3>
                </div>
                  <h2>Cypress</h2>
                  <p>This course has as objective that the student acquires knowledge in the fundamental characteristics of Cypress, concepts, bases and others, making use of it in a practical way.</p>
              </div>
              <div class="card-courses-izy col-lg-3 automation">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/enrol/index.php?id=133" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/automation/img-6.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Robotic Process Automation - RPA</h3>
                </div>
                  <h2>Robotic Process Automation - RPA</h2>
                  <p>The objective of this course is for the student to acquire the necessary knowledge about the management of the process automation tool (RPA), known as UiPath.</p>
              </div>
            </div>
          </div>

          {{-- Científico de Datos --}}

          <div class="separator">
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=236" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-1.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Introducción al Lenguaje de Programación Python</h3>
                </div>
                  <h2>Introducción al Lenguaje de Programación Python</h2>
                  <p>The flexibility of python makes it a fundamental tool for data processing, so this introductory course to this language is a good start to develop skills in the training path</p>
              </div>
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=237" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-2.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Procesamiento de Datos con Python</h3>
                </div>
                  <h2>Procesamiento de Datos con Python</h2>
                  <p>Once the basic concepts of Python are appropriated, it is time to enter the world of data processing, using libraries and methods.</p>
              </div>
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=247" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-3.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Gestión de Proyectos de Ciencia de Datos en el Ámbito Empresarial</h3>
                </div>
                  <h2>Gestión de Proyectos de Ciencia de Datos en el Ámbito Empresarial</h2>
                  <p>By having basic knowledge of python and data processing, we give entry to agile methodologies that will help good project management</p>
              </div>
            </div>
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=239" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-4.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Introducción al Aprendizaje Automático</h3>
                </div>
                  <h2>Introducción al Aprendizaje Automático</h2>
                  <p>Automatic learning or machine learning is a process that is based on techniques that help the system learn,</p>
              </div>
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=241" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-5.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Evaluación de Algoritmos de Clasificación</h3>
                </div>
                  <h2>Evaluación de Algoritmos de Clasificación</h2>
                  <p>Once the basic concepts in computer science, mathematics and statistics have been appropriated, we enter the classification metrics: confusion metrics and curves (ROC and AUC).</p>
              </div>
              <div class="card-courses-izy col-lg-3 científico-de-datos">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=242" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-6.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Aprendizaje Supervisado - Clasificación con Naive Bayes</h3>
                </div>
                  <h2>Aprendizaje Supervisado - Clasificación con Naive Bayes</h2>
                  <p>Probability and data mining is done with Naive Bayes, it is an automatic learning algorithm based: on a simple but well-founded probabilities classifier</p>
              </div>
            </div>
          </div>

          {{-- Agile --}}

          <div class="separator">
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=157" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-1.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Kanban Essentials Professional Certificate KEPC™</h3>
                </div>
                  <h2>Kanban Essentials Professional Certificate KEPC™</h2>
                  <p>Businesses today use Kanban because it is an efficient way to manage workflow and makes it easy to achieve goals based on customer requirements.</p>
              </div>
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=158" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-2.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Design Thinking Professional Certificate</h3>
                </div>
                  <h2>Design Thinking Professional Certificate</h2>
                  <p>This professional Design Thinking certification provides a detailed understanding of key concepts and definitions to improve user experience interactions.</p>
              </div>
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=162" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-3.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>OKR Certified Professional</h3>
                </div>
                  <h2>OKR Certified Professional</h2>
                  <p>Becoming certified as an OKR professional is an opportunity to strengthen your profile, actively participating in helping a company define and achieve its objectives.</p>
              </div>
            </div>
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=159" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-4.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Agile Coach Professional Certificate</h3>
                </div>
                  <h2>Agile Coach Professional Certificate</h2>
                  <p>We are a company driven by leadership and following the rules of scrum, we give a good company to our apprentices teaching them with good practices</p>
              </div>
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=156" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-5.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>User Stories Foundations Certificate USFC</h3>
                </div>
                  <h2>User Stories Foundations Certificate USFC</h2>
                  <p>CBecoming certified in the User Stories Foundations Certificate USFC is the first big step in personal growth towards the creation and pinnacle of products</p>
              </div>
              <div class="card-courses-izy col-lg-3 Agile">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=147" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/Agile/img-6.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Modelo Ágil de Spotify</h3>
                </div>
                  <h2>Modelo Ágil de Spotify</h2>
                  <p>This course on Spotify's agile model aims to show the independent approach created by this company and which focuses on the importance of relationships and culture through people.</p>
              </div>
            </div>
          </div>

          {{-- programming --}}

          <div class="separator">
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=195" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/programming/img-1.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Fundamentos de programación en Java</h3>
                </div>
                  <h2>Fundamentos de programación en Java</h2>
                  <p>This course is a great opportunity to start the path as a Java developer and learn a powerful language that can be used in web programming</p>
              </div>
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=232" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/programming/img-2.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Fundamentos de Desarrollo Web con Angular</h3>
                </div>
                  <h2>Fundamentos de Desarrollo Web con Angular</h2>
                  <p>The Angular web development course is a great option for anyone who wants to start a career as a front end developer since its structure is perfect for starting from scratch.</p>
              </div>
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=234" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/programming/img-3.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Fundamentos de Programación en Python</h3>
                </div>
                  <h2>Fundamentos de Programación en Python</h2>
                  <p>Python is a powerful programming language that has become popular and its use in the technology industry is becoming more constant every day.</p>
              </div>
            </div>
            <div class="row container-cards-courses-izy">
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=197" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-4.jpg')}}" alt="">
                        </a>
                    </div>
                    <h3>Control de Versiones con GIT</h3>
                </div>
                  <h2>Control de Versiones con GIT</h2>
                  <p>This course aims to generate greater knowledge about version control management in our projects, making use of good practices for code versioning (GitFlow),</p>
              </div>
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=119" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-5.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Principios y Buenas Prácticas de Programación en Python</h3>
                </div>
                  <h2>Principios y Buenas Prácticas de Programación en Python</h2>
                  <p>This course aims to guide students in managing good practices for software development using Python, contributing to productivity and teamwork within a development team.</p>
              </div>
              <div class="card-courses-izy col-lg-3 programming">
                <div class="container-img-effect">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/view.php?id=43" target="_blank">
                            <img class="img-fluid" src="{{asset('img/image-collection/post/CientificoDatos/img-6.avif')}}" alt="">
                        </a>
                    </div>
                    <h3>Programación Orientada a Objetos en Java</h3>
                </div>
                  <h2>Programación Orientada a Objetos en Java</h2>
                  <p>This course is a continuation of "Fundamentals of Java Programming", which covers the advanced OOP programming paradigm, developing more detailed skills in handling classes.</p>
              </div>
            </div>
          </div>

        </div>
  </div>


  @include('layouts.footer')

@endsection

