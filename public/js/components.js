'use strict'


$(document).on('ready', function(){

    // accordion 001
    $('ul.accordion-001').on('click', 'li', function() {
       $(this).toggleClass('active');
       if( $(this).hasClass('active') ) {
        $(this).children('.accordion-001-body').slideDown('100');
       } else {
        $(this).children('.accordion-001-body').slideUp('100');
       }
     });

    // accordion 002
    $('.accordion-002').on('click', 'li', function() {
       $(this).toggleClass('active');
       $('html, body').animate({
        scrollTop: $(this).offset().top
       }, 'fast');
    });
});
