$(document).ready(function () {

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
                    if (response.status == "success") {
                        $("#contact-form")[0].reset(); // Reset the form
                    }

                    msg =
                        ` <div class="alert alert-` +
                        response.status +
                        `  " role="alert">
                            ` +
                        response.message +
                        `
                        </div>`;

                    $(".alert-message").html(msg);

                    setTimeout(function () {
                        $(".alert-message").html(null);
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
