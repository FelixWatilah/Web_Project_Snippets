$(document).ready(function () {

    $('#img').html("<i class='fa fa-spinner fa-spin'></i>");

    setInterval(function () {
        $.get('php/get_image.php', function (data) {
            $('#img').html(data).fadeIn(2000);
        });
    },500);
});