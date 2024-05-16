$(document).ready(function () {
    
    let slideIndex = 1;
    const slides = $(".banner-img img");
    // Function to show a specific slide
    function showSlides(n) {
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        // Hide all slides
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("banner-fades-in");
            slides[i].classList.remove("active");
        }

        slides[slideIndex - 1].classList.add("banner-fades-in");
        slides[slideIndex - 1].classList.add("active");
    }
    // Initialize the slider
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
