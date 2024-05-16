$(document).ready(function () {
    // Swiper:  offers Slider
    new Swiper('.near-salon-container', {
        loop: true,
        nextButton: '.near-salon-button-next',
        prevButton: '.near-salon-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            800: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
    });

});