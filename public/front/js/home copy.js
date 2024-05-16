$(document).ready(function () {
    // Function to check if element is in view
    function isElementInView(elem) {
        var windowHeight = $(window).height();
        var scrollY = $(window).scrollTop();
        var elemTop = $(elem).offset().top;

        return elemTop <= scrollY + windowHeight;
    }

    // Function to handle scroll event
    $(window).scroll(function () {
        $(".animated").each(function () {
            if (isElementInView(this)) {
                attr = $(this).attr("data-anni");
                $(this).addClass("animate__animated");
                $(this).addClass("animate__" + attr); // Apply fadeIn animation when element is in view
            }
        });
    });

    let slideIndex = 1;
    const slides = document.getElementsByClassName("banner-slide");
    function showSlides(n) {
        if (n > 3) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        if (n == 0) {
            slideIndex = 3;
        }
        // Hide all slides
        $(slides).addClass("banner-fades-out");

        setTimeout(function () {
            $(slides).removeClass("banner-fades-out"); 
        }, 1000);
        
        setTimeout(function () { 
            $(slides).addClass("banner-fades-in");
            $(slides).attr("id", "banner-slide-" + [slideIndex]);
        }, 1500);


        setTimeout(function () {
            $(slides).removeClass("banner-fades-in");
        }, 3000);
    }
    // Function to advance to the next slide
    $(document).on("click", ".banner-slider-nav-btn", function () {
        n = parseInt($(this).attr("data-n"));
        showSlides((slideIndex += n));
    });

    // ===================================================================
    $(".service-preload").hide();

    $(".service-btn").click(function () {
        $(".service-btn").removeClass("active");
        $(this).addClass("active");
        const category = $(this).data("category");
        $(".service-preload").show();
        setTimeout(function () {
            $(".service-preload").hide();

            $(".service-item").each(function () {
                const itemCategory = $(this).data("category");

                if (category === "all" || itemCategory === category) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }, 200);
    });

    // ===================================================================

    $("#vacation-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        autoPlay: true,
        // dots: true
    });

    // ===================================================================

    $(".testimonial-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        autoPlay: true,
        navContainer: ".testimonial-arrow", // Specify the navigation container
        navText: [
            '<i class="fa-solid fa-chevron-left"></i>',
            '<i class="fa-solid fa-chevron-right"></i>',
        ], // Navigation arrows icons
    });

    // ===================================================================

    $(".post-slider").owlCarousel({
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 3],
        itemsMobile: [600, 2],
        autoPlay: true,
        dots: false,
        pagination: false,
    });
});
