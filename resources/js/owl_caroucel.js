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
// let [faster_order] = document.getElementsByClassName('faster_order');
// faster_order.classList.add('owl_2');


