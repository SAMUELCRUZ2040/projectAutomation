$(document).ready(function() {
    const contenedor = $('#container-services .container-icon-services .container .printipal-container-services .content-service');
    
    //loader services
    $(window).on('load', function() {
        setTimeout(function() {
            contenedor.addClass('delay-elements');
        }, 700);
    });
    // $(window).on('scroll', function() {
    //     const altura = $(window).scrollTop() + $(window).height();
    //     const contenedorAltura = $('#contenedorm').offset().top;      
    //     if (altura > contenedorAltura) {
    //       $('#contenedorm').addClass('animate-scroll');
    //     }
    //   });    
      
    // preloader 
    $('.preloader').delay(600).fadeOut(700, function() {
        $(this).remove();
    });
});







