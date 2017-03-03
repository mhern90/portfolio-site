'use strict';

/* 
* Author: Melinda Hernandez
* Version: 1.0
* Date: 3/2/2017
*/   

/* Function List */

// calcScrollTop calculates the distnce between
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

// stick takes 1 parameter, element, and adds the sticky class to it. 
// It also adds the class of shrink to any image inside of the element
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

// measures the parent container of the image and sets the div wrap 
// width to it's width and an equal height for responsive thumbnails 
function picContainerCalc() {
    var $imgWrap = $(".img-wrap"),
    $container = $imgWrap.parent().first().width();

    $imgWrap.css({
        'width' : $container + 'px',
        'height' : $container + 'px'
    })
}

// applies the open class to the mobile menu button to expand menu
function openMenu() {
    $('.ham-button').toggleClass('open');
    $('.nav-mobile').slideToggle();
}

$(document).ready(function(){

    var $nav = $('nav');

    $(window).on('scroll', function(){ 
        calcScrollTop($nav);
    });

     // open menu
    $('.ham-button').on('click', function() {
        openMenu();
    });

    // trigger animation on scroll
    $(window).on('scroll', function() {

        if ($(document).find(".swoosh").length == 0) {
            return; // prevents execution if class doesn't exist
        } else { 
            var swooshHeight = $(document).find(".swoosh").first()
                                          .offset().top - $('header').height() || null;
        }
        var swooshDistance = $(window).scrollTop();

        if (swooshDistance > swooshHeight) {
            animate();
        }
    });
    
    // generate portfolio thumbnails on resize
    if($(document).find(".img-wrap").length == 0) {
        return; // prevents execution if class doesn't exist
    } else {
        $(window).on("resize", function () {
            picContainerCalc();
        }).resize();
    }

});