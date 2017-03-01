/**
 * Created by Watilah on 19-Jul-16.
 */
(function ($) {
    $.fn.countdown=function (options,callback) {
        var settings ={'date':null};
        if (options){
            $.extend(settings,options);
        }

        var this_sel=$(this);
        function count_exec() {
            var eventDate = Date.parse(settings['date']) / 1000;//event date
            var currentDate = Math.floor($.now()/1000);//current date

            if (eventDate<=currentDate){
                callback.call(this);
                clearInterval(interval);
            }//confirm if the eventDate is equal to the currentDate

            var seconds = eventDate - currentDate;//seconds to the eventDate

            var days = Math.floor(seconds/(60*60*24));//days to the eventDate
            seconds-=days*60*60*24;

            var hours =Math.floor(seconds/(60*60));//hours to the eventDate
            seconds-=hours*60*60;

            var minutes = Math.floor(seconds/(60));//minutes to the eventDate
            seconds-=minutes*60;

            days = (String(days).length !== 2) ? '0' + days : days;
            hours = (String(hours).length !== 2) ? '0' + hours : hours;
            minutes = (String(minutes).length !== 2) ? '0' + minutes : minutes;
            seconds = (String(seconds).length !== 2) ? '0' + seconds : seconds;

            if(!isNaN(eventDate)){
                this_sel.find('.days').text(days);
                this_sel.find('.hours').text(hours);
                this_sel.find('.mins').text(minutes);
                this_sel.find('.secs').text(seconds);
            }// check if eventDate is a Number
        }// end count-exec
        count_exec();
        var interval=setInterval(count_exec,1000);//countdown interval
    }
})(jQuery);//jQuery-countdown plugin