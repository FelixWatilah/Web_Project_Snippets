/**
 * Created by Watilah on 07-Jul-16.
 */

//load the document
$(document).ready(function () {
    
    $('#sliderCarousel').owlCarousel({
        navigation:true,
        slideSpeed:700,
        paginationSpeed:700,
        singleItem:true,
        rewindNav:true,
        rewindSpeed:5000,
        autoPlay:5000
    });//animate image slider

    $('#developerBtn').click(function (e) {
        e.preventDefault();
        $('#developerModal').slideDown();
    });//animate developer modal

    $('.table tr:even').addClass('highlightTr');//highlight even table rows
    $('.table th').addClass('highlightTh');//highlight table header

    $('#contact_form').submit(function (e) {
        var inputName=$('#inputName').val();
        var inputEmail=$('#inputEmail').val();
        var inputNumber=parseInt($('#inputNumber').val());
        var inputMessage=$('#inputMessage').val();
        e.preventDefault();

        if(inputName!=""){
            if(inputEmail!=""){
                if(inputNumber!="" && !isNaN(inputNumber)){
                    if(inputMessage!=""){
                        $('#success').slideDown(700,function () {
                            $('.user').html(''+inputName+'');
                            $(this).css('margin-bottom',10).css('margin-top',10);
                        });
                    }//Check for message
                    else{
                        $('#error').slideDown(700,function () {
                            $(this).css('margin-bottom',10).css('margin-top',10);
                        });
                    }//Error if no message
                }//Check for number
                else{
                    var phoneError=$(inputNumber).val();
                    $('#phoneInfo').slideDown(700,function () {
                        $('.phoneInfo').html(''+inputName+'');
                        $('.phoneError').html(''+phoneError+'');
                        $(this).css('margin-bottom',10).css('margin-top',10);
                    });
                }//Error if no number or if not a number
            }//Check for email
            else{
                $('#error').slideDown(700,function () {
                    $(this).css('margin-bottom',10).css('margin-top',10);
                });
            }//Error if no email
        }//Check for name
        else{
            $('#error').slideDown(700,function () {
                $(this).css('margin-bottom',10).css('margin-top',10);
            });
        }//Error if no name
        
    });//validation of form submit

    $('#drop1').hover(function () {
        $('#drop-menu1').slideDown(500);
    });
    $('#drop2').hover(function () {
        $('#drop-menu2').slideDown(700).css('left',150);
    });//services dropdown menu

    $('#top').click(function () {
        $('html, body').animate({scrollTop:0},1500);
    });//scroll to top of the body

    $('#countdown').countdown({date: '29 July 2016'},function () {
        $('#countdown').text('Time to go home Nigga...');
    });//countdown

    $('#accord').accordion({icons:{'header':'ui-icon-plus','headerSelected':'ui-icon-minus'},collapsible:true,active:false});//accordion

    $('#date').datepicker({dateFormat:'dd/mm/yy',minDate:0,maxDate:9,showButtonPanel:true,showAnim:'explode'});//datepicker

});