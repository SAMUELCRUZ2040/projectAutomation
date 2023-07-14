/*----------------------- IMPORTS TO EXTERNAL FILES -----------------------*/

import ('./bootstrap');
import ('../css/app.css')
import ('../css/transitions.css')
import 'transition-style';
import "transition-style/transition.circles.min.css";

$(document).ready(function() {

    /*----------------------- VARIABLES -----------------------------------*/

    const colors = $(".list-switch li"),
    cardsPublicity = $('#content-home .printipa-img .container-img'),//home
    description = $('#content-home .description .mini-description'),
    animationHome = $('#content-home .printipa-img .container-img'),
    contenedor = $('#content-home .description'), 
    buttons = $('#content-home .links'),
    transitionsCardsCourses = $('#container-transition-courses .container-printipal-courses .container-courses'),//discover
    listItemsDiscover = $('#container-discover .content-discover .container-information .list-information .item'),
    descriptionDiscover2 = $('#container-discover .content-discover .description .mini-description h4'),
    descriptionDiscover = $('#container-discover .content-discover .description .mini-description h1'),
    animationDiscover = $('#container-discover'),
    effectLater = $("#container-posts .container-text-printipal .container");//post
    ;
    
    /*-------------------------- GENERAL  --------------------------------*/
        $(window).on('load', function() {

            /* PRELOADER */

            $('.preloader').fadeOut('slow', function() {
                $(this).remove();
            });

            /*   delay  */

            setTimeout(function() {
                descriptionDiscover.addClass('delay-elements');
                $('#container-discover .content-discover .description .mini-description span, #container-discover .content-discover .description .mini-description .container-effect-letter').addClass('active-effect-preloader');
                $('#container-discover .content-discover .description .mini-description').addClass('active-effect-preloader-retard');
            }, 100);
            setTimeout(function() {
                descriptionDiscover2.addClass('delay-elements');
            }, 200);
            setTimeout(function() {
                animationDiscover.addClass('active-effect-prelaoder-printipal');

            }, 300);
            setTimeout(function() {
            listItemsDiscover.addClass('delay-elements');
            }, 350);
            setTimeout(function() {
                effectLater.addClass('active-effect-preloader'); // post courses
                $('.container-text-printipal .container').addClass('active-effect-preloader');

            }, 550);
            });

        /* TOOGLE MENU */ 
        

        $("#toogle-menu").click(function(e) {
            e.preventDefault();
            $(".toogle_menu").toggleClass("active-toogle");
        });
    
        $("#toogle_menu").click(function(e) {
            e.preventDefault();
            $("#nav").toggleClass("active-menu");
        });

        /* ANIMATION MINI MENU */

        $("#nav .mini-menu .navigation-one .list-unstyled .item a").hover(function () {
            $("#nav").addClass('over-mini-menu');
            $("#nav .mini-menu").addClass('over-mini-menu-item');

            }, function () {
                $("#nav").removeClass('over-mini-menu');
                $("#nav .mini-menu").removeClass('over-mini-menu-item');
            }
        );

        /* switch */ 

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
            document.documentElement.style.setProperty('--main-color', colorIdentificator)
        });


    /*-------------------------- WELCOME  --------------------------------*/


      /*  LETTERS HOME */
        
        $("#container-discover .content-discover .description .mini-description .container-effect-letter").hover(function () {
            $("#container-discover").addClass('over-mini-menu');
            
        }, function () {
            $("#container-discover").removeClass('over-mini-menu');
        }
        );

        /* COUNTERS */

        function animateValue(element, start, end, duration) {
            $({ value: start }).animate(
              { value: end },
              {
                duration: duration,
                step: function () {
                  element.text(Math.floor(this.value));
                },
                complete: function () {
                  element.text(end);
                }
              }
            );
          }
          
          $(document).ready(function () {
            animateValue($('#counter1'), 0, 100, 4000);
            animateValue($('#counter2'), 0, 150, 4000);
            animateValue($('#counter3'), 0, 120, 4000);
            animateValue($('#counter4'), 0, 2, 4000);
          });
          
        
        /*  COURSES TRANSITIONS */ 

        $("#container-transition-courses .mini-navbar ul > li").click(function (e) { 
            e.preventDefault();
            const selector = $(this).attr('data-filter');
            if(selector){
                transitionsCardsCourses.filter('.' + selector).addClass('active-courses-discover');
                transitionsCardsCourses.not('.' + selector).removeClass('active-courses-discover');
            }
        });

        /* EFFECT SCROLL */
        $('#To-do-principal').on('scroll', function() {
            var windowHeight = $(window).height();
            var scrollPosicion = $(window).scrollTop();
        
            $('.content-cards-discover .container-printipal-img').each(function() {
            var contenedorPosicion = $(this).offset().top;
            var elemento = $(this); 
        
            if (scrollPosicion > contenedorPosicion - windowHeight) {
                setTimeout(function() {
                elemento.addClass('animate-scroll'); 
                }, 180);
            }
            });
        
            $('#container-transition-courses').each(function() {
            var contenedorPosicion = $(this).offset().top;
            var elemento = $(this);
        
            if (scrollPosicion > contenedorPosicion - windowHeight) {
                setTimeout(function() {
                elemento.addClass('scroll-courses-transition');
                }, 180);
            }
            });
        
            $('#container-last .container-cards-last .card-last').each(function() {
            var contenedorPosicion = $(this).offset().top;
            var elemento = $(this); 
        
            if (scrollPosicion > contenedorPosicion - windowHeight) {
                setTimeout(function() {
                elemento.addClass('scroll-courses-transition'); 
                }, 100);
            }
            });
        
            $('#footer .container-contact .container-cards .card-footer .content-card').each(function() {
            var contenedorPosicion = $(this).offset().top;
            var elemento = $(this); 
        
            if (scrollPosicion > contenedorPosicion - windowHeight) {
                setTimeout(function() {
                elemento.addClass('scroll-courses-transition');
                }, 180);
            }
            });

            /* effect scroll post courses  */
            
            $('#container-cards-categories .container-printipal-cards-publicity').each(function() {
                var contenedorPosicion = $(this).offset().top;
                var elemento = $(this); 
            
                if (scrollPosicion > contenedorPosicion - windowHeight) {
                    setTimeout(function() {
                    elemento.addClass('animate-scroll-post');
                    }, 190);
                }
                });
        });
        /* INFORMATION USER */
        $(".container-view-profile-edit-printipal ul > li").click(function (e) { 
            e.preventDefault();
            const selectorUser = $(this).data('filter');
            console.log(selectorUser);
            if(selectorUser){
                $(".container-view-profile-edit-printipal ul > li").removeClass('active-information-users');
                $(this).addClass('active-information-users');
                $(".mini-menu-view-user .information-user .content-edit-profile .container-item").removeClass('active-information-user');
                $(".mini-menu-view-user .information-user .content-edit-profile .container-item." + selectorUser).addClass('active-information-user');
            }
        });
        $(".effect-button-form-active").click(function (e) { 
            e.preventDefault();
            $(".mini-menu-view-user .information-user").toggleClass('active-edit-form');
        }); 

        $(".container-view-profile .options-profile ul > li").click(function (e) { 
            e.preventDefault();
            const selectorUser = $(this).attr('data-filter');
            console.log(selectorUser)
            if(selectorUser){
                 $(".container-view-profile .options-profile ul > li").removeClass('active-mini-menu-view-profile-item');
                 $(this).addClass('active-mini-menu-view-profile-item');
                $(".mini-menu-view-user .container-items-view-profile").removeClass('active-mini-menu-view-profile');
                $(".mini-menu-view-user .container-items-view-profile." + selectorUser).addClass('active-mini-menu-view-profile');
            }
        });
        /* POST COURSES  */
        $("#container-options ul >li").click(function (e) { 
            e.preventDefault();
            const selector = $(this).attr('data-filter');
    
            if(selector){
                $('#container-cards-categories .container-printipal-cards-publicity .container-cards-courses-izy .card-courses-izy').filter('.' + selector).addClass('active');
                $('#container-cards-categories .container-printipal-cards-publicity .container-cards-courses-izy .card-courses-izy').not('.' + selector).removeClass('active');
            }
        });
    });



    //loader 
    // home
    // $(window).on('load', function() {
    //     setTimeout(function() {
    //         contenedor.addClass('delay-elements');
    //     }, 1400);
    //     setTimeout(function() {
    //         description.addClass('delay-elements');
    //     }, 1600);
        
    //     setTimeout(function() {
    //         buttons.addClass('delay-elements');
    //     }, 1800);
    //     setTimeout(function() {
    //         animationHome.addClass('delay-elements');
    //     }, 2000);
    // });