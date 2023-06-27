@extends('layouts.sections')
@section('content')
@vite(['resources/js/app.js'])

    <!-- Star  preloader -->
        <div id="preloader" class="preloader">
            <div class="loading-inner">
            </div>
            <div class="loading-inner2">
            </div>
        </div>
    <!-- Star  preloader -->

    <!-- Star  content-home -->
        
        <div id="content-home" class="content-home row">
            <div class="col-xl-6 col-xxl-6 description ">
                <div class="container-text">
                    <div class="tittle">
                        <h1>Master Create Certify</h1>
                        <h1>With IzyACademy</h1>
                    </div>
                    <div class="mini-description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptate, accusantium adipisci neque repudiandae molestias voluptatum voluptas officiis quia et nostrum odit, illum autem quidem veritatis dignissimos sint illo provident. Quisquam recusandae ab enim architecto fuga, adipisci quo dicta ullam sequi quaerat quidem mollitia aspernatur vero ratione facilis tempore debitis?</p>
                    </div>
                    <div class="links">
                        <button class="btn"> SHOP NOW</button>
                        <button class="btn"> SUSCRIBE</button>
                    </div>
                </div>
                <!-- End Social networks -->
                <div class="social-networks">
                    <ul class="list-social">
                        <li class="item">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li class="item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                        <li class="item">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </li>
                    </ul>
                </div>
                <!-- Satrt Social networks -->
            </div>
            <div class="col-xl-6 col-xxl-6  printipa-img ">
                <div class="container-img animation-one active-lottie">
                    <img class="img-fluid" src="{{asset('img/image-collection/home/Chair.png')}}" alt="">
                    <img class="img-fluid" src="{{asset('img/image-collection/home/Dog.png')}}" alt="">
                </div>
        </div>
        <div id="particles-js"></div>
        <script src="{{asset('Home/appHome.js')}}"></script>
        <script src="{{asset('Home/homeSetting.js')}}"></script>
    <!-- Star  content-home -->
    @endsection










