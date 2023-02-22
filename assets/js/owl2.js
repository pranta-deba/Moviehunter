$(document).ready(function () {
    $("#hindi-movie").owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            800: {
                items: 4,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                // loop:true
            }
        }
    });
});