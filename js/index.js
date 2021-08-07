
// top sale owl-carousel
$("#slider").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 15,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
