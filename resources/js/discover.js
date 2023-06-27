$(document).ready(function() {
    const glasses = $("#container-discover .content-discover  .content-img .container-img img:nth-child(2)"),
          mouth = $("#container-discover .content-discover  .content-img .container-img img:nth-child(3)"),
          earphones = $("#container-discover .content-discover  .content-img .container-img img:last-child"),
          description = $('#container-discover .content-discover .description .mini-description h1'),
          description2 = $('#container-discover .content-discover .description .mini-description h4'),
          animation = $('#container-discover .content-discover  .content-img .container-img'),
          listItems = $('#container-discover .content-discover .container-information .list-information .item'),
          cardsPublicity = $('#container-transition-courses .container-printipal-courses .container-courses'),
          active = $('#container-transition-courses .container-printipal-courses .container-courses:first-child');

    // preloader 
    $('.preloader').delay(600).fadeOut(700, function() {
        $(this).remove();
    });
    
    $(window).on('load', function() {
        setTimeout(function() {
            description.addClass('delay-elements');
        }, 1200);
        setTimeout(function() {
            description2.addClass('delay-elements');
        }, 1250);

         setTimeout(function() {
             animation.addClass('delay-elements');
         }, 1600);
         setTimeout(function() {
             listItems.addClass('delay-elements');
         }, 2000);
         setTimeout(function() {
             $('#container-discover .content-discover .description .mini-description span, #container-discover .content-discover .description .mini-description .container-effect-letter').addClass('active-effect-preloader');
             $('#container-discover .content-discover .description .mini-description').addClass('active-effect-preloader-retard');
         }, 1300);

    });

    // home
    $("#text-1").hover(function () {
        glasses.addClass('show-img');
        }, function () {
        glasses.addClass('show-img');
        }
    );
    $("#text-3").hover(function () {
        mouth.addClass('show-img');
            
        }, function () {
        mouth.addClass('show-img');
        }
    );
    $("#text-2").hover(function () {
        earphones.addClass('show-img');
            
        }, function () {
        earphones.addClass('show-img');
        }
    );

    $("#container-discover .content-discover .description .mini-description .container-effect-letter span").hover(function () {

        $("#container-discover .content-discover .description .mini-description").addClass('active-hover-tittles');
        $("#container-discover").addClass('over-mini-menu');
        
      }, function () {

        $("#container-discover .content-discover .description .mini-description").removeClass('active-hover-tittles');
        $("#container-discover").removeClass('over-mini-menu');
      }
    );



    $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#content-cards-discover .container-printipal-img:first-child').offset().top + 600;
        
        if (contenedorPosicion > elementoPosicion) {
          $('.content-cards-discover .container-printipal-img:first-child').addClass('animate-scroll');
          console.log("eliminar1")
        }
      });

      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('.content-cards-discover .container-printipal-img:nth-child(2) .content-img').offset().top + 1700;
        
        if (contenedorPosicion > elementoPosicion) {
          $('.content-cards-discover .container-printipal-img:nth-child(2)').addClass('animate-scroll');
        }
      });

      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('.content-cards-discover .container-printipal-img:last-child .content-img').offset().top + 2000;
        
        if (contenedorPosicion > elementoPosicion) {
          $('.content-cards-discover .container-printipal-img:last-child').addClass('animate-scroll');
        }
      });


      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#container-transition-courses').offset().top + 2900;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#container-transition-courses').addClass('scroll-courses-transition');
        }
      });

      
      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#container-last .container-cards-last .card-last').offset().top + 3400;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#container-last .container-cards-last .card-last').addClass('scroll-courses-transition');
        }
      });

            
      $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#footer .container-contact .container-cards .card-footer .content-card').offset().top + 4000;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#footer .container-contact .container-cards .card-footer .content-card').addClass('scroll-courses-transition');
        }
      });
      // transition-courses
      $("#container-transition-courses .mini-navbar ul > li").click(function (e) { 
        e.preventDefault();
        const selector = $(this).attr('data-filter');
        if(selector){
            cardsPublicity.filter('.' + selector).addClass('active-courses-discover');
            cardsPublicity.not('.' + selector).removeClass('active-courses-discover');
        }
    });
});

