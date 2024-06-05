$(document).on("mouseenter", ".category-more-text", function () {
    $(".category-more-div").addClass("active");
});

$(document).on("click", ".category-more-text", function () {
    $(".category-more-div").addClass("active");
});

$(document).ready(function () {
    $("#login-form").on("submit", function (e) {
        e.preventDefault();
        const login_url = $(this).attr("action");
        const email = $("#login-email").val();
        const password = $("#login-password").val();
        const token = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: login_url,
            method: "POST",
            data: {
                _token: token,
                email: email,
                password: password,
            },
            success: function (response) {
                location.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let message = "";
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            message += "<div>" + errors[key][0] + "</div>";
                        }
                    }
                    $("#login-message").html(
                        '<div class="alert alert-danger">' + message + "</div>"
                    );
                } else {
                    $("#login-message").html(
                        '<div class="alert alert-danger">An error occurred. Please try again.</div>'
                    );
                }
            },
        });
    });
    
    $("#register-form").on("submit", function (e) {
        e.preventDefault();
        // Get the form action URL
        const url = $(this).attr("action");
        // Ensure the URL is defined
        if (!url) {
            console.error("Form action URL is not defined");
            return;
        }

        // Get the CSRF token
        const token = $('meta[name="csrf-token"]').attr("content");
        if (!token) {
            console.error("CSRF token not found");
            return;
        }

        // Get form data
        const name = $("#signup-name").val();
        const email = $("#signup-email").val();
        const password = $("#signup-password").val();
        const password_confirmation = $("#signup-password_confirmation").val();

        $.ajax({
            url: url,
            method: "POST",
            data: {
                _token: token,
                name: name,
                email: email,
                password: password,
                password_confirmation: password_confirmation,
            },
            success: function (response) {
               location.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let message = "";
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            message += "<div>" + errors[key][0] + "</div>";
                        }
                    }
                    $("#register-message").html(
                        '<div class="alert alert-danger">' + message + "</div>"
                    );
                } else {
                    $("#register-message").html(
                        '<div class="alert alert-danger">An error occurred. Please try again.</div>'
                    );
                }
            },
        });
    });
});
