$('#add').click(function () {
    var name = $('#name').val();

    $.post('php/array.php', {name:name}, function (data) {
        $('#feed').html(data);
    });
});

$('#submit').click(function () {

    $.post('php/array.php', function (data) {
        $('#feed').html(data);
    });
});