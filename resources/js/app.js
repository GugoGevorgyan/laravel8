require('./bootstrap');
require('./dropdownMenu');

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        // loop:false,
        // margin:0,
        pagination: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
})

