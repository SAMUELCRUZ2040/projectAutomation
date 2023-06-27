@extends('layouts.sections')
@section('content')
@vite('resources/js/discover.js')
    @include('layouts.loader')
    <div id="container-discover" class="container-discover">
        <div id="content-discover" class="row content-discover">
            <div class="col-sm-5  col-md-3 col-lg-3 col-xl-5 col-xxl-6 description ">
                <div class="mini-description">
                    <h4 class="mb-3 fs-4" style="color: #676767; font-family: inherit">Potencia tu carrera a través de la</h4>
                    <div id="text-1" class="container-effect-letter">
                        <span class="effect-letter">
                            Excelencia 
                        </span>
                    </div>
                    <div id="text-2" class="container-effect-letter">
                        <span class="effect-letter">
                            Progreso &
                            
                        </span>
                    </div>
                    <div id="text-3" class="container-effect-letter"> 
                        <span class="effect-letter">
                            Perseverancia
                        </span>
                    </div>
                    <h4 class="mt-5 fs-4" style="color: #676767; font-family: inherit">Impulsa tu carrera con nuestra pasión por el desarrollo y la creatividad.</h4>
                </div>
            </div>
            <div class="col-sm-5  col-md-7 col-lg-7 col-xl-5 col-xxl-4 content-img ">
                <div class="container-img">
                    <img class="img-fluid" src="{{asset('img/image-collection/discover/dog1.png')}}" alt="dog">
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 container-information pt-5">
                <ul class="list-information">
                    <li class="item">
                        <i class="fa-solid fa-handshake"></i>
                        <p>More than a hundred courses +</p>
                    </li>
                    <li class="item">
                        <i class="fa-solid fa-medal"></i>
                        <p>Earn lots of badges</p>
                    </li>
                    <li class="item">
                        <i class="fa-solid fa-person"></i>
                        <p>teamwork</p>
                    </li>
                    <li class="item text-center">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <p>Prepare for your professional career</p>
                    </li>
                    <li class="item">
                        <a class="" href="https://izyacademy.com/" target="_blank">view courses +</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content-cards-discover" class="content-cards-discover container-fluid">
            <div class="row gy-5  container-printipal-img">
                <div class="col-sm-4 col-lg-3 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=15" target="_blank">
                            <img  class="img-fluid" src="https://img.freepik.com/foto-gratis/mujer-joven-sueter-melocoton-casual-mochila-aislado-pared-color-verde-oliva_343596-5324.jpg?w=740&t=st=1687665890~exp=1687666490~hmac=51e33ad5f4c95169c90374c8e6b7008a85a5bd0c3c1e37cc98710410f2ff7fe8" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-6 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=16" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/mujer-joven-expresiva-posando_176474-26825.jpg?w=900&t=st=1687666028~exp=1687666628~hmac=04979872ad68f61d2e340164d354a963befa2110e14d0473d09583d040f43597" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=23" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/colegiada-silla-estilo-memphis_23-2148203797.jpg?w=740&t=st=1687664358~exp=1687664958~hmac=9e0d512ec689bd0ebaf39ad04c1f61d6e3b5fcd11a1b9ba393fa32ab5bdc5db5" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row container-printipal-img">
                <div class="col-sm-6 col-md-6 col-lg-6 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=19" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/mujer-oficina-entusiasta-mujer-negocios-sosteniendo-computadora-portatil-gritando-alegria-celebrando-regocijandose-pie-sobre-fondo-blanco_1258-86049.jpg?w=900&t=st=1687665413~exp=1687666013~hmac=afb42629dbc6ddbd18ab04420796d5eb0661993e6b58ab896b5b5dfa4a2d7e17" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=21" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/retrato-hombre-africano-sonriente-emocionado-anteojos_171337-7794.jpg?w=900&t=st=1687666245~exp=1687666845~hmac=9993b23531b5afa031c261232cffb3c70e5a29ab29ec686eebf2b87e0ea127d9" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row gy-5  container-printipal-img">
                <div class="col-md-3 col-lg-3 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=27" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/retrato-hermosa-adolescente-cerca_23-2149153351.jpg?w=740&t=st=1687664483~exp=1687665083~hmac=77b26a5ca64608dd40e6b344884192c3b51bed7577aac9e23bdf5a2144951a3c" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=54" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/fotos-premium/feliz-joven-estudiante-laptop-mirando-su-companero-sentado-frente-discusion-o-consulta-leccion_274679-9699.jpg?w=900" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 content-img">
                    <div class="container-img">
                        <a href="https://izyacademy.com/course/index.php?categoryid=52" target="_blank">
                            <img class="img-fluid" src="https://img.freepik.com/foto-gratis/alegre-hombre-barbudo-gafas-camiseta-blanca-laptop-manos_171337-7879.jpg?w=740&t=st=1687666127~exp=1687666727~hmac=ea9b6cb929158597f1ed4e73a7d89bd704ab42d41f827580e0583bb2c04f6043" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="container-transition-courses" class="container-transition-courses">
            <div class="container">
                <div class="mini-navbar">
                    <ul class="list-options-nav">
                        <li data-filter="scrum" class="item">
                            <i class="fa-solid fa-person"></i>
                        </li>
                        <li data-filter="agile" class="item">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </li>
                        <li data-filter="python" class="item">
                            <i class="fa-brands fa-python"></i>
                        </li>
                        <li data-filter="ia" class="item">
                            <i class="fa-solid fa-hands-holding-circle"></i>
                        </li>
                        <li data-filter="automation" class="item">
                            <i class="fa-solid fa-desktop"></i> 
                        </li>
                        <li data-filter="cybersecurity" class="item">
                            <i class="fa-solid fa-user-lock"></i>
                        </li>
                        <li data-filter="java" class="item">
                            <i class="fa-solid fa-code"></i>
                        </li>
                        <li data-filter="cloud" class="item">
                            <i class="fa-solid fa-cloud"></i>
                        </li>
                    </ul>
                </div>
                <div class="container-printipal-courses">
                    <div class="row container-courses scrum active-courses-discover">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2 class="fw-normal">Scrum Master Professional Certificate</h2>
                                <p>Scrum es el marco de desarrollo de proyectos ágiles más utilizado a nivel mundial para toda la industria, caracterizado por adoptar una estrategia de construcción incremental del producto o servicio, en lugar de una planificación y ejecución total.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=150" target="_blank">view course +</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-1.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses agile">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Agile Coach Professional Certificate (ACPC) Englishe</h2>
                                <p>CertiProf® ofrece la certificación profesional en Agile Coach Professional Certificate (ACPC), para quienes deseen aprender e implementar competencias de coaching para encontrar y gestionar los cambios necesarios para lograr objetivos y cumplir metas.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=191" target="_blank">view course +</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-2.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses python">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Introducción al Lenguaje de Programación Python</h2>
                                <p>La flexibilidad de python lo convierte en una herramienta fundamental para el procesamiento de datos, por lo que este curso de introducción a este lenguaje es un buen comienzo para desarrollar habilidades en el camino de la formación del científico de datos.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=236" target="_blank">view course +</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses ia">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Artificial Intelligence Professional Certificate IAPC</h2>
                                <p>Certificarse en inteligencia artificial es una oportunidad de crecimiento profesional, ya que la inteligencia artificial actualmente está arrasando en la industria tecnológica, debido a la gran capacidad de las máquinas para absorber, interpretar y analizar grandes cantidades de datos, optimizando el desarrollo de las actividades.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/index.php?categoryid=38" target="_blank">view course +</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-4.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses automation">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Selenium WebDriver con Page Object Model</h2>
                                <p>La automatización de pruebas de software ahorra tiempo a las empresas y reduce los errores. En este curso desarrollarás habilidades en el uso de Selenium WebDriver, que hace competitivo a un trabajador de la industria del software.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=176" target="_blank"> view course</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-5.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses cybersecurity">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Advanced Cybersecurity</h2>
                                <p>Este curso está dedicado a describir la forma en que funcionan los entornos de ciberseguridad. donde aprenderá y explorará una amplia variedad de temas de Ciberseguridad Avanzada.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=233" target="_blank"> view course</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-6.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses java">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Object Oriented Programming in Java</h2>
                                <p>Este curso es una continuación de "Fundamentos de la programación Java", que cubre el paradigma de programación OOP avanzado, desarrollando habilidades más detalladas en el manejo de clases, los pilares de la programación orientada a objetos: herencia, polimorfismo, encapsulación y abstracción.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=43" target="_blank"> view course</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-7.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row container-courses cloud">
                        <div class="col-md-8 col-lg-8 description-courses">
                            <div class="description">
                                <h2>Cloud Technology Lab</h2>
                                <p>El curso está enfocado a validar y practicar los conocimientos adquiridos en los cursos Fundamentos de Computación en la Nube y Conceptos de Tecnología en la Nube, acompañado de una serie de ejercicios, abordaje y resolución de problemas o situaciones utilizando la nube.</p>
                            </div>
                            <div class="container-view">
                                <a href="https://izyacademy.com/course/view.php?id=227" target="_blank">view course +</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 content-img">
                            <div class="container-img">
                                <img class="img-fluid" src="{{asset('img/image-collection/discover/category-img/img-8.avif')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container-last" class="container-last container">
            <h2 class="fs-sm-5 fs-1 fw-bold mb-5">¿Por qué elegirnos?<h2>
            <div class="container-cards-last row">
                <div class="card-last col-lg-3">
                    <div class="container-img-effect">
                        <div class="container-img">
                            <a href="">
                                <img class="img-fluid" src="https://img.freepik.com/foto-gratis/joven-empresario-traves-telefono-movil-oficina-mirando-camara_637285-8766.jpg?w=1380&t=st=1686362071~exp=1686362671~hmac=59678db47fa6bb6290dd8bc89989856dedf1a25b6be3452c756ef569e5dbb8b8" alt="">
                            </a>
                        </div>
                        <h3>3 razones clave por las que deberías empezar a impulsar tu carrera profesional con nosotros</h3>
                    </div>
                    <h2>3 razones clave por las que deberías empezar a impulsar tu carrera profesional con nosotros</h2>
                    <p>Somos una empresa impulsada por el liderazgo y siguiendo las reglas de scrum, damos buena compañía a nuestros aprendices enseñándoles con buenas prácticas</p>
                </div>
                <div class="card-last col-lg-3">
                    <div class="container-img-effect">
                        <div class="container-img">
                            <a href="">
                                <img class="img-fluid" src="https://img.freepik.com/foto-gratis/dos-hombres-negocios-masculinos-femeninos-sonrientes-que-muestran-pulgares-arriba-al-aire-libre_1262-12595.jpg?w=1380&t=st=1686362687~exp=1686363287~hmac=45f74c8b8b74ffeaf15f82a2f39c98824623086ab3168beffbfec18bd0135966" alt="">
                            </a>
                        </div>
                        <h3>Consigue tu insignia digital como reconocimiento a tu compromiso y dedicación</h3>
                    </div>
                    <h2>Consigue tu insignia digital como reconocimiento a tu compromiso y dedicación</h2>
                    <p>Una vez finalizado el curso obtendrás una credencial digital avalada por IzyAcademy y Credly, donde podrás demostrar a todos que has obtenido tu credencial</p>
                </div>
                <div class="card-last col-lg-3">
                    <div class="container-img-effect">
                        <div class="container-img">
                            <a href="">
                                <img class="img-fluid" src="https://img.freepik.com/foto-gratis/reunion-social-femenina-pasar-tiempo-interior_23-2148462924.jpg?w=1380&t=st=1686362871~exp=1686363471~hmac=55a09cc409e0f7aee1ec75f8e53aa788b766fcb9c1f00bed20abda13772fe05d" alt="">
                            </a>
                        </div>
                        <h3>Además de tu insignia, lleva también tu certificado</h3>
                    </div>
                    <h2>Además de tu insignia, lleva también tu certificado</h2>
                    <p>Somos personas guiadas por las reglas de Scrum, Y prestamos nuestra mayor atención a nuestros alumnos, además, puede obtener no solo su insignia, sino también su certificado por aprobar el curso.</p>
                </div>
            </div>
        </div>
    @include('layouts.footer')
    </div>
@endsection
