$(document).ready(function () {
    // Swiper:  offers Slider
    new Swiper('.offers-container', {
        loop: true,
        nextButton: '.offers-button-next',
        prevButton: '.offers-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            800: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

    // Swiper: inspired Slider
    new Swiper('.inspired-container', {
        loop: true,
        nextButton: '.inspired-button-next',
        prevButton: '.inspired-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 5,
                spaceBetween: 30
            },
            1028: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        },
    });

    
    $(document).on('mouseenter', '.category-more-text', function() {
        $('.category-more-div').addClass('active');
    });
    
    $(document).on('mouseleave', '.category-more-text', function() {
        $('.category-more-div').removeClass('active');
    });
    
    
});