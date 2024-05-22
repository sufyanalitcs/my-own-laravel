$(document).ready(function () {
    // Assign some jquery elements we'll need
    var $swiper = $(".salon-slide-container");
    var $bottomSlide = null;
    var $bottomSlideContent = null;

    // Swiper:  offers Slider
    new Swiper(".salon-slide-container", {
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            800: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });

    // Swiper:  offers Slider
    new Swiper(".saloon-customer-container", {
        loop: true,
        nextButton: ".saloon-customer-button-next",
        prevButton: ".saloon-customer-button-prev",
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            800: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });
});
