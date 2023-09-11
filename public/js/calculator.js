$(document).ready(function(){

    $(".form-control").change(function(){

        var numeric = new RegExp('^\\d+(?:\.\\d+)?$');
        if (numeric.test($(this).val())) {
            alert("text area with id: " + $(this).attr('id') + "is numeric");
        }
    });
});