$(document).ready(function () {
    $("#product-container").owlCarousel({
        items: 10,
        loop: true,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            800: {
                items: 2,
                nav: true
            },
            1000: {
                items: 2,
                nav: true,
                // loop:true
            }
        }
    });
});