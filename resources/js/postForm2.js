let form = document.querySelector("#formulario");
let button = document.querySelector("#btn-form");
let skips = document.querySelector;
let optionsPost = document.querySelector(".container-cards .card .card-footer i");
let more_options = document.querySelector('.container-cards .card  .more-options');


$(document).ready(function() {
    const contenedor = $('#container-posts .container-description .container-text .tittle'),
          description = $('#container-posts .container-description .container-text .mini-description'),
          botones = $('#container-posts .container-description .links'),
          animationHome = $('#container-posts .container-img .animation'),
          cardsPublicity = $('#container-cards-categories .container-printipal-cards-publicity .container-cards-courses-izy .card-courses-izy');

     $(window).on('load', function() {
         setTimeout(function() {
             contenedor.addClass('delay-elements');
         }, 1400);

          setTimeout(function() {
              description.addClass('delay-elements');
          }, 1600);
          setTimeout(function() {
              botones.addClass('delay-elements');
              carga.fadeOut();
          }, 1800);
          setTimeout(function() {
              animationHome.addClass('delay-elements');
              carga.fadeOut();
          }, 2000);
          setTimeout(function() {

        }, 600);
     });

    $('.preloader').delay(600).fadeOut(700, function() {
        $(this).remove();
    }); 

    // cards categories


    $("#container-options ul >li").click(function(e) {
        e.preventDefault();
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    // scroll 

    $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#footer .container-contact .container-cards .card-footer .content-card').offset().top + 1600;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#footer .container-contact .container-cards .card-footer .content-card').addClass('scroll-courses-transition');
        }
      });

      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#container-cards-categories .container-printipal-cards-publicity .separator').offset().top + 1200;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#container-cards-categories .container-printipal-cards-publicity').addClass('animate-scroll-post');
        }
      });


});
