'use strict';
    
function calcScrollTop(element) {
    var scrollTop     = $(window).scrollTop();
    var elementOffset = element.offset().top;

    if (scrollTop >= elementOffset && scrollTop != 0) {
        stick(element);
    } else {
        element.find('img')
               .removeClass('shrink');
        if(element.hasClass('sticky')) {
            element.removeClass('sticky');
        }
    }
};

function stick(element) {
    $(element).addClass('sticky');
    $(element).find('img')
        .addClass('shrink');
}


$(document).ready(function(){
    // console.log('jquery is working');
    var $nav = $('nav');

    $(window).on('scroll', function(){ 
        calcScrollTop($nav);
    });

});