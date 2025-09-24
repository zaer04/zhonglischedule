$(document).ready(function(){
    $("#daySelector").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.post("scheduler.php", formData, function(data) {
            $("#activities").html(data);
        });
    });
});
