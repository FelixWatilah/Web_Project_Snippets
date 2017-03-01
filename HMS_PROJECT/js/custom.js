/**
 * Created by Watilah on 02-Feb-17.
 */
$(document).ready(function () {

    //create animations
    new WOW().init();

    //load content using ajax
    $('.login-option').click(function () {
        var href = $(this).attr('href');
        $('#content').load(href);
        return false;
    });
});
