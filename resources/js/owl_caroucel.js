$(document).ready(function () {
    $('#owl_1').owlCarousel({
        loop: false,
        // margin:10,
        nav: false,
        dots: false,
        responsive: {
            412: {
                items: 2
            },
            760: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    });
    $('#owl_3').owlCarousel({
        loop: false,
        // margin:10,
        nav: true,
        dots: false,
        responsive: {
            412: {
                items: 2
            },
            760: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        },
    });
    $(".owl_3 .owl-nav").addClass("vector");
    if ($(window).width() < 800) {
        $(".owl_3 .owl-nav").addClass("d-none");
    }else{
        $(".owl_3 .owl-nav").removeClass("d-none");
    }
        if ($(window).width() < 1200 ) {
        // $('.faster_order').addClass('owl_2');
        $('#owl_2').owlCarousel({
            nav: false,
            loop: false,
            // margin:10,
            dots: true,
            responsive: {
                412: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }
})

