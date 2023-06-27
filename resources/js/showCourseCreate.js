$(document).ready(function() {

    
    $('#To-do-principal').scroll(function() {
        const contenedorPosicion = $(this).scrollTop() + $(this).outerHeight();
        const elementoPosicion = $('#footer .container-contact .container-cards .card-footer .content-card').offset().top + 1000;
        
        if (contenedorPosicion > elementoPosicion) {
          $('#footer .container-contact .container-cards .card-footer .content-card').addClass('scroll-courses-transition');
        }
      });
      $(window).on('load', function() {
         setTimeout(function() {
           $('.container-text-printipal .container').addClass('active-effect-preloader');
       }, 1700);
    })
});


