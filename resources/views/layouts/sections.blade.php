<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- icon -->
    <link rel="icon" href="{{asset('img/icon.png')}}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!-- popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3ff4519403.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    
    @vite(['resources/js/app.js', 'resources/sass/app.scss', 'resources/css/transitions.css'])
    
    <title>Automatización | IzyAcademy</title>
</head>
<body>
    <!----------  Start  Switch ---------->

    <div class="cover-switch">
        <i class="fa-solid fa-gear"></i>
    </div>

    <div class="switch">
        <h4>color changer</h4>
        <div class="hide-button">x</div>
        <ul class="list-switch">
            <li data-color="#50a8a1" style="background: #50a8a1"></li>
            <li data-color="#c79864" style="background: #c79864"></li>
            <li data-color="#000000" style="background: #000000"></li>
            <li data-color="#fd5c55" style="background: #fd5c55"></li>
            <li data-color="#6b9839" style="background: #6b9839"></li>
            <li data-color="#9644e2" style="background: #9644e2"></li>
            <li data-color="#e350b8" style="background: #e350b8"></li>
            <li data-color="#f1a433" style="background: #f1a433"></li>
        </ul>
    </div>

    <!---------- End  Switch ---------->

    
    <!---------- Start nav ---------->
    <div id="nav" class="printipal-nav">
        <div class="logo-izy">
            <div class="container-img">
                <a href="{{route('/')}}">
                    <img src="{{asset('img/Logo.png')}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
        <div id="toogle_menu" class="toogle_menu">
            <i class="fa-solid fa-bars"></i>
        </div>
        <span id="exhaust" class="exhaust">
            <i class="fa-solid fa-x"></i>
        </span>
        <a href="#" class="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>  
        <div class="mini-menu d-flex h-100 align-items-center justify-content-center text-center flex-column">
            <div class="row navigation-one w-100">
                <div class="col-lg-9">
                    <ul class="list-unstyled">
                        <li class="item">
                            <a href="{{route('discover')}}">
                                <span class="number">01</span>
                                 Discover
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{route('/')}}" class="fw-bold">
                                <span class="number">02</span>
                                Home
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{route('posts.index')}}">
                                <span class="number">03</span>
                                Posts
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{route('products')}}">
                                <span class="number">04</span>
                                Products
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 publicity d-flex flex-column justify-content-center align-items-start">
                    <ul class="list-publicty">
                        <li class="item fw-bold text-dark fs-5">Hablemos</li>
                        <li class="item fs-normal fs-6">+57321874854</li>
                        <li class="item fw-bold text-dark fs-5 mt-4">Comuniquenos</li>
                        <li class="item fs-normal fs-6 d-flex flex-column">
                            <span>IzyAcademy@qvision.us</span>
                            <span>IzyAcademy@qvision.us</span>
                        </li>
                    </ul>
                    <ul class="content-items text-start" style="list-style: none">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
    
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="row  navigation-two w-100">
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <a class="text-dark fs-5 lh-1 fw-bold" href="{{route('index')}}">Users</a>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <a class="text-dark fs-5 lh-1 fw-bold" href="{{route('services')}}">Services</a>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <a class="text-dark fs-5 lh-1 fw-bold" href="{{route('blog')}}">Blog</a>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <span>Siguenos en nuestras redes</span>
                    <ul class="list-items-social-networks d-flex justify-content-center align-items-center p-0 m-0 ms-3" style="list-style: none; gap: 20px">
                        <li class="item">
                            <a class="text-dark fs-3" href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a class="text-dark fs-3" href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a class="text-dark fs-3" href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    <!---------- end nav ---------->

    <!---------- Start Container Printipal ---------->

    <section id="To-do-principal">

        @yield('content')
    </section>

    <!---------- End Container Printipal ---------->

    <!-- Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>
