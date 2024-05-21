$(document).ready(function () {
    // Swiper:  seller Slider
    new Swiper(".seller-banner-container", {
        loop: true,
        slidesPerView: 1,
        paginationClickable: true,
        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return `<span class="outer-dot swiper-pagination-bullet"><span class="inner-dot"></span></span>`;
            },
        },
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 1,
            },
            800: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
        },
    });


    // Swiper:  seller Slider
    new Swiper(".schedule-container", {
        loop: true,
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 6,
                spaceBetween: 30
            },
            800: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 10
            }

        },
    });


    


    // Swiper:  seller Slider
    new Swiper(".tour-container", {
        loop: true,
        slidesPerView: 1,
        nextButton: '.tour-button-next',
        prevButton: '.tour-button-prev',
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            800: {
                slidesPerView: 1,
                spaceBetween: 10
            }, 

        },
    });


    new bootstrap.Popover(document.querySelector('#first'));

});
