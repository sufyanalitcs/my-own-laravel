$(document).ready(function () {
    // this is used to animated
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

    $("#newsletterForm").submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Perform client-side validation
        var email = $("#newsletterEmail").val();

        if (email == "") {
            alert("Please enter your email.");
            return false;
        }

        // Submit the form using AJAX
        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function (response) {
                // Handle successful subscription
                if (response.status == "success") {
                    $("#newsletterForm")[0].reset(); // Reset the form
                }
                $(".newsletter-error").html(response.message);

                setTimeout(function () {
                    $(".newsletter-error").html(null);
                }, 5000);
            },
            error: function (xhr, status, error) {
                // Handle errors
                var errors = xhr.responseJSON.errors;
                $('.newsletter-error').remove();
                // Display validation errors
                let msg =""  ;
                $.each(errors, function(key, value) {
                    msg += value ;
                });
                $(".newsletter-error").html(msg);
                
            },
        });
    });



    $(document).on("submit", "#loginForm", function () {
        // Prevent default form submission
        event.preventDefault();
        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {

                if(response.status == "success"){
                    console.log(response.message)
                    location.reload();
                } 

                // Handle successful login response
                console.log(response);

            },
            error: function(xhr, status, error) {
                if (xhr.status === 422) {
                    // Parse error response
                    var errorResponse = xhr.responseJSON;
                    var errorMessage = errorResponse.message;

                    errorMessage = errorResponse.message;

                    // Display error message on the form
                    $('#loginError').text(errorMessage).show();
                } else {
                    // Handle other error statuses
                    console.error('Error:', xhr.status);
                }
            }
        });
    });



    

    $(document).on("submit", "#signupForm", function () {
        // Prevent default form submission
        event.preventDefault();
        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {

                if(response.status == "success"){
                    console.log(response.message)
                    location.reload();
                } 
                
                // Handle successful login response
                console.log(response);

            },
            error: function(xhr, status, error) {
                if (xhr.status === 422) {
                    // Parse error response
                    var errorResponse = xhr.responseJSON;
                    var errorMessage = errorResponse.message;

                    errorMessage = errorResponse.message;

                    // Display error message on the form
                    $('#loginError').text(errorMessage).show();
                } else {
                    // Handle other error statuses
                    console.error('Error:', xhr.status);
                }
            }
        });
    });

});
