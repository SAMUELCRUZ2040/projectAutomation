$(document).ready(function() {
    // preloader 
    $('.preloader').delay(600).fadeOut(700, function() {
        $(this).remove();
    });
});