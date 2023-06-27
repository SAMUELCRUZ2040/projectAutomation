import ('./bootstrap');
import ('../css/app.css')
import ('../css/transitions.css')
import 'transition-style';
import "transition-style/transition.circles.min.css";



AOS.init();
$(document).ready(function() {
    const colors = $(".list-switch li"),
    contenedor = $('#content-home .description'),
    description = $('#content-home .description .mini-description'),
    buttons = $('#content-home .links'),
    animationHome = $('#content-home .printipa-img .container-img'),
    cardsPublicity = $('#content-home .printipa-img .container-img');
    
    //home
    $("#transition-checked  input").click(function (e) { 
        const selector = $(this).attr('data-filter');
        if(selector){
            cardsPublicity.filter('.' + selector).addClass('active-lottie');
            cardsPublicity.not('.' + selector).removeClass('active-lottie');
        }
    });

    //loader 
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

    // preloader 
    $('.preloader').delay(1000).fadeOut(1100, function() {
        $(this).remove();
    });

    // toogle menu
    $("#toogle-menu").click(function(e) {
        e.preventDefault();
        $(".toogle_menu").toggleClass("active-toogle");
    });


    $("#toogle_menu").click(function(e) {
        e.preventDefault();
        $("#nav").toggleClass("active-menu");
    });

    // switch
    $(".cover-switch").click(function(e) {
        e.preventDefault();
        $(".cover-switch ").addClass("hide");
        $(".switch").addClass("show");
    });

    $(".switch .hide-button").click(function(e) {
        e.preventDefault();
        $(".cover-switch ").removeClass("hide");
        $(".switch").removeClass("show");
    });

    $(colors).click(function(e) {
        e.preventDefault();
        let colorIdentificator = $(this).attr('data-color');
        let color = document.documentElement.style.setProperty('--main-color', colorIdentificator)
    });

    // toggle mini-menu

    $('.toogle_menu-nav').click(function() {
        $(this).toggleClass('active');
        $('#nav').toggleClass('active-nav');
    
    });

    $("#logout-link").click(function (e) { 
        e.preventDefault();
        const logoutForm = document.querySelector("#logout-form");
        logoutForm.submit();
    });
    
    $("#nav .mini-menu .navigation-one .list-unstyled .item a").hover(function () {
            $("#nav").addClass('over-mini-menu');
            $("#nav .mini-menu").addClass('over-mini-menu-item');
   
        }, function () {
            $("#nav").removeClass('over-mini-menu');
            $("#nav .mini-menu").removeClass('over-mini-menu-item');
        }
    );
    
});
