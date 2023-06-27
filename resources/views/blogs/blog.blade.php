@extends('layouts.sections')
@section('content')
@vite(['resources/js/blog.js'])

<div id="preloader" class="preloader">
    <div class="loading-inner">
    </div>
    <div class="loading-inner2">
    </div>
</div>

<div id="container-blog" class="container-blog row">
    <div class="col-lg-7 col-xl-6 col-xxl-6 description">
        <div class="container-text">
            <div class="tittle">
                <h1>Explore What</h1>
                <h1>We Have For You</h1>
            </div>
            <div class="mini-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptate, accusantium adipisci neque repudiandae molestias voluptatum voluptas officiis quia et nostrum odit, illum autem quidem veritatis dignissimos sint illo provident. Quisquam recusandae ab enim architecto fuga, adipisci quo dicta ullam sequi quaerat quidem mollitia aspernatur vero ratione facilis tempore debitis?</p>
            </div>
            <div class="links">
                <button class="btn"> SHOP NOW</button>
                <button class="btn"> SUSCRIBE</button>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xl-6 col-xxl-6 content-img">
        <div class="container-img">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_cBATFDETGa.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
        </div>
    </div>
</div>
<div class="content-blog">
    <div id="container-description" class="container-description">
        <div class="row content-descripion">
            <div class="col-lg-5 container-text">
                <h2>Courses Automation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, architecto.</p>
            </div>
            <div class="col-lg-7 container-img">
                <div class="mini-container">
                    <img class="img-fluid rounded-3" src="https://i.pinimg.com/564x/f0/c7/2c/f0c72c23617930f2739728356ad64713.jpg" alt="">
                </div>
                <div class="mini-container">
                    <img class="img-fluid rounded-3" src="https://i.pinimg.com/564x/7c/85/11/7c8511173e6d779c7d4c29053de938df.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div id="container-description" class="container-description">
        <div class="row content-descripion">
            <div class="col-lg-7 container-img">
                <div class="mini-container">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/32/f9/5d/32f95dc11df459bc58cf31e0d5a12edd.jpg" alt="">
                </div>
                <div class="mini-container">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/56/65/a1/5665a13e627cef12d66e88a2ed1cb019.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 container-text">
                <h2>Programming courses</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, architecto.</p>
            </div>
        </div>
    </div>

    <div id="container-carrousel" class="container-carrousel">
        <div class="row">
            <div class="col-lg-7 container-text">
                <h2>Programming courses</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati itaque ut ad doloremque. Perferendis quaerat necessitatibus blanditiis voluptatibus quos officiis maiores tempora debitis fuga molestias, quia cumque consequatur repudiandae eos voluptas accusamus iure odio repellendus ad exercitationem dolorem quibusdam soluta corrupti quam. Nisi ratione doloribus quaerat rem soluta beatae est!</p>
            </div>
            <div class="col-lg-5 content-carousel">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="1000">
                        <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-mecanografia-codigo_114360-3581.jpg?w=900&t=st=1682299575~exp=1682300175~hmac=d90f5aac2ec39f947c242b3a785c67420b731a7b3c9b3e2333ab5ee8361d87c7" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://img.freepik.com/vector-gratis/haga-clic-aqui-ilustracion-concepto_114360-4030.jpg?w=900&t=st=1682299618~exp=1682300218~hmac=7d8a568036215ef51d17bb3bbb54685f8b97726a9152572017628c2316af170b" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-actualizacion_114360-2799.jpg?w=900&t=st=1682299647~exp=1682300247~hmac=a5896f990b1e28bc69390e6b63006915cc4c0c3a62871ac1e352d754959e664a" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>

</div>

@endsection