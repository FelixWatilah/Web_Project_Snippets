/**
 * Created by Watilah on 30-Dec-16.
 */

//a change in county to display constituency drop down
$('#county').change(function () {
    var consti = $('#const');
    var county = $('#county').val();

    consti.html('<i class="fa fa-spinner fa-spin"></i>');
    $.post('php/constituency.php', {county:county}, function (data) {
        consti.html(data);
    });

    //a change in constituency, to display wards drop down
    $('#constituency').change(function () {
        var ward = $('#war');
        var constituency = $('#constituency').val();

        ward.html('<i class="fa fa-spinner fa-spin"></i>');
        $.post('php/ward.php', {constituency:constituency}, function (data) {
            ward.html(data);
        });

        //a change in wards, to display submit button
        $('#ward').change(function () {
            var btn = $('#btn');

            btn.html('<i class="fa fa-spinner fa-spin"></i>');
            btn.html("<input class='w3-btn w3-btn-bar btn btn-success' type='button' value='Submit' id='submit'>");

            //when submit button is clicked
            $('#submit').click(function () {
                var county = $('#county').val();
                var constituency = $('#constituency').val();
                var ward = $('#ward').val();

                $(this).attr('value','Submitting...').attr('disabled',true);

                $.post('php/constituency.php', {county:county, constituency:constituency, ward:ward}, function (data) {
                    $('#alert').html(data).css('position','absolute').slideDown(1000).delay(2000).slideUp(1000);

                    $('#submit').attr('value','Submit').attr('disabled',false);

                });//post to constituency.php

            });//submit button

        });//select ward

    });//select constituency

});//select county
