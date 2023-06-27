import EmblaCarousel from 'embla-carousel'
import '../css/base.css'
import '../css/sandbox.css'
import '../css/embla.css'

  const OPTIONS = { dragFree: true, containScroll: 'trimSnaps' },
     emblaNode = document.querySelector('.embla'),
     viewportNode = emblaNode.querySelector('.embla__viewport'),
     emblaApi = EmblaCarousel(viewportNode, OPTIONS),
     circulo = document.getElementById("object");


  // move circle
  circulo.addEventListener("mousedown", function(event) {
  event.preventDefault();
  
  let posX = event.clientX;
  let posY = event.clientY;
  
    document.addEventListener("mousemove", moveCirculo);
    document.addEventListener("mouseup", function() {
    document.removeEventListener("mousemove", moveCirculo);
    document.removeEventListener("mouseup", arguments.callee);
  });

  function moveCirculo(event) {
    let newPosX = event.clientX;
    let newPosY = event.clientY;
    
    let circuloX = circulo.offsetLeft;
    let circuloY = circulo.offsetTop;
    
    let diffX = newPosX - posX;
    let diffY = newPosY - posY;
    
    circulo.style.left = (circuloX + diffX) + "px";
    circulo.style.top = (circuloY + diffY) + "px";
    
    posX = newPosX;
    posY = newPosY;
  }
});

$(document).ready(function() { 
  const contenedor = $('.container-front-page .container-text h1'),
        description = $('.container-front-page .mini-description'),
        buttons = $('.container-front-page .container-text .links'),
        animationHome = $('.container-front-page .carrousel-scroll'),
        scrollContainer = document.getElementById("scroll-container"),
        scrollContent = document.getElementById("scroll-content");


   // preloader  
   $('.preloader').delay(600).fadeOut(700, function() {
       $(this).remove();
   });

   // delay animation
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
         ani.style.animation = "none";
     }, 2200);

});

// carousel
$("#container-printipal-cards .row-cards .content-cards .container-card").hover(function () {
  $("#container-printipal-cards .row-cards .content-cards").css('animation-play-state', 'paused');
  
}, function () {
  $("#container-printipal-cards .row-cards .content-cards").css('animation-play-state', 'running');

}
);

// infinite scroll
scrollContainer.addEventListener("scroll", function() {
  if (scrollContainer.scrollTop + scrollContainer.clientHeight >= scrollContent.offsetHeight) {
    // mover el contenido que ya se desplazó fuera del área visible al final
    const movedContent = scrollContent.removeChild(scrollContent.firstChild);
    scrollContent.appendChild(movedContent);
  }
});

});
