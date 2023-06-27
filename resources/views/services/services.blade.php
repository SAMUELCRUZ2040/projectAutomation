@extends('layouts.sections')
@section('content')

@vite('resources/js/services.js')
    <!-- services --> 
    <div id="preloader" class="preloader">
        <div class="loading-inner">
        </div>
        <div class="loading-inner2">
        </div>
    </div>
    <div id="container-services" class="container-services">
        <div class="container container-tittle">
            <div class="tittle">
                <h1 class="fw-normal">We are</h1>
                <h1 class="fw-bold">Specialists</h1>
            </div>
        </div>
        <div class="container-icon-services">
            <div class="container">
                <div class="row  printipal-container-services">
                    <div class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">Scrum master</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                    <div class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-solid fa-magnifying-glass-chart"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">Artificial intelligence</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                    <div class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-sharp fa-solid fa-display"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">Web page developments</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                </div>
                <div class="row  printipal-container-services">
                    <div  id="contenedorm" class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">Automation</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                    <div  id="contenedorm" class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-solid fa-mask-ventilator"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">cybersecurity</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                    <div id="contenedorm"  class="col-lg-4 p-2 content-service">
                        <div class="container-icon">
                            <i class="fa-solid fa-cloud-showers-heavy"></i>
                        </div>
                        <div class="services-body">
                            <h4 class="fw-bold mt-4">cloud security</h4>
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, numquam!</p>
                            <a href="#">ver detalle</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection