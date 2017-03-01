$(document).ready(function () {

    //contact_form
    $('#submit').click(function () {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();

        if(name == '' || email == '' || phone == '' || message == ''){
            $('#alert')
                .html("<div class='text-danger'>Please fill all the fields.</div>")
                .slideDown(1000)
                .delay(1500)
                .slideUp(1000);
            return false;
        }else if ((phone.length)<10 || (phone.length)>10){
            $('#alert')
                .html("<div class='text-danger'>The phone number must contain exactly 10 digits.</div>")
                .fadeIn(1000)
                .delay(1500)
                .fadeOut(1000);
            return false;
        }else{
            $.post('php/contact.php', {name: name, email: email, phone: phone, message: message}, function (data) {
                if (data == "<div class='text-success'>Message Sent.</div>"){
                    $('form')[0].reset();
                }

                $('#alert')
                    .html(data)
                    .fadeIn(1000)
                    .delay(1500)
                    .fadeOut(1000);

                });
            return false;
        }
    });//end of contact form details

    //scroll to about
    $('.det').click(function () {
        $('#developer').animatescroll({scrollSpeed:2000,padding:50});
    });

    //scroll to web design
    $('#web').click(function () {
        $('#webDesign').animatescroll({scrollSpeed:2000,padding:50});
    });

    //scroll to graphic design
    $('#graphic').click(function () {
        $('#graphicDesign').animatescroll({scrollSpeed:2000,padding:50});
    });

    //scroll to top
    $('#up').click(function () {
        $('.container-fluid').animatescroll({padding:0});
    });

    //create animations
    new WOW().init();

    /*
    window.scroll(function () {
        if (document.body.scrollTop() > 100){
            $('#nav').removeClass('navv').slideDown(1000);
        }
    });

     Change style of navbar on scroll
    window.scroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("nav");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
        }
    }*/

});
