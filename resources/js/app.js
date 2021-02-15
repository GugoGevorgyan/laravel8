require('./bootstrap');
require('./dropdownMenu');

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop:false ,
        // margin:10,
        nav:false,
        dots:false,
        responsive:{
            412:{
                items:3
            },
            760:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:6
            }
        }
    })
})

