$(document).ready(function(){
  const contenedor = $('#container-blog .description .container-text'),
  description = $('#container-blog .description .mini-description'),
  buttons = $('#container-blog .links'),
  animationHome = $('#container-blog .printipa-img .container-img');

  $(window).on('load', function() {
    setTimeout(function() {
        contenedor.addClass('delay-elements');
    }, 1400);
    setTimeout(function() {
        description.addClass('delay-elements');
    }, 1600);
    setTimeout(function() {
        buttons.addClass('delay-elements');
    }, 1800);
    setTimeout(function() {
        animationHome.addClass('delay-elements');
    }, 2000);
});

});