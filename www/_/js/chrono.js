var clock;

$(document).ready(function() {
    var clock;

    clock = $('.clock').FlipClock(10, {
        clockFace: 'MinuteCounter',
        countdown: true,
        callbacks: {
            start: function() {
                $('.message').html('The clock has started!');
            }
        }
    });

});