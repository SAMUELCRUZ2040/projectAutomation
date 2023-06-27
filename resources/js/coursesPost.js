$(document).ready(function() {
    $("#Create-course").click(function (e) { 
        e.preventDefault();
        $("#form-create-course").addClass('active-create-course');
    });
    $("#skips").click(function (e) { 
        e.preventDefault();
        $("#form-create-course").removeClass('active-create-course');
    });
    
    $(document).mouseup(function(e) {
        var container = $("#form-create-course");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass('active-create-course');
        }
    });
});


