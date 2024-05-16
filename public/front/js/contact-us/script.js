$(document).ready(function () {
    
    $("#post-slider-1").owlCarousel({
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 3],
        itemsMobile: [600, 2],
        autoPlay: true,
        dots: false,
        pagination: false,
        rtl: true,
    });

    $("#post-slider-2").owlCarousel({
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 3],
        itemsMobile: [600, 2],
        autoPlay: true,
        dots: false,
        pagination: false,
    });

    // Initialize the map
    let map = L.map("map").setView([51.505, -0.09], 13); // Set the initial center and zoom level

    // Add the base map layer
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(map);

    // Add a marker to the map
    let marker = L.marker([51.5, -0.09])
        .addTo(map)
        .bindPopup("A sample location."); // Optional: Add a popup message to the marker

    $("#contact-form").submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Perform client-side validation
        let name = $("#name").val();
        let email = $("#email").val();
        let message = $("#message").val();
        let flag = true;
        $(".form-field").removeClass("invalid");

        if (name == "" || name == null) {
            $("#name").addClass("invalid");
            flag = false;
        }

        if (email == "" || email == null) {
            $("#email").addClass("invalid");
            flag = false;
        }

        if (message == "" || message == null) {
            $("#message").addClass("invalid");
            flag = false;
        }

        if (flag) {
            // Submit the form using AJAX
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function (response) {
                    if(response.status == "success"){
                        $("#contact-form")[0].reset(); // Reset the form
                    } 

                    msg = ` <div class="alert alert-`+response.status+`  " role="alert">
                                `+response.message+`
                            </div>` ;

                            $(".alert-message").html(msg)

                            setTimeout(function() { 
                             $(".alert-message").html(null)
                            }, 5000);
                },
                error: function (xhr, status, error) {
                    // Handle errors
                    console.error(xhr.responseText);
                },
            });
        } else {
            return false;
        }
    });

});
