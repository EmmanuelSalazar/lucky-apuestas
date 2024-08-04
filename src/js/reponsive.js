$(document).ready(function($) {
    var width = $(window).width();
        console.log(width);
        if (width <= 720) { 
            $('.banner').prependTo('#main');
        }
    });