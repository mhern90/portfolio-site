'use strict';
    

/* calcScrollTop calculates the distnce between*/
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

/* stick takes 1 parameter, element, and adds the sticky class to it. It also adds the class of shrink to any image inside of the element*/
function stick(element) {
    $(element).addClass('sticky');
    $(element).find('img')
        .addClass('shrink');
}

function animate() {
    var animations = document.querySelectorAll(".swoosh"); // collects all html elements needing to be animated

    // loops through each element and sets the animation css, dictated by the data attr or the default
    animations.forEach(function(part) {
        $(part).css({
            'animation-name': $(part).data("name") || null, // default
            'animation-duration' : $(part).data("duration") || '1s', // default 
            'animation-fill-mode' : $(part).data("fill-mode") || 'none', // default
            'animation-delay' : $(part).data("delay") || '0s' //default
        })
    });
}


$(document).ready(function(){
    // console.log('jquery is working');
    var $nav = $('nav');

    $(window).on('scroll', function(){ 
        calcScrollTop($nav);
    });


    // trigger animation on scroll
    $(window).on('scroll', function() {
        var swooshHeight = $(document).find(".swoosh").first()
                                      .offset().top - $('header').height();
        var swooshDistance = $(window).scrollTop();

        if (swooshDistance > swooshHeight) {
            animate();
        }
    });
});