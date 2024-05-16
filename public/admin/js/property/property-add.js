// Function to display the uploaded image inside the div
function displayImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#uploadDiv").html(
                '<img src="' + e.target.result + '" class="img-fluid ">'
            );
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Trigger the file input click when the upload div is clicked
$("#uploadDiv").click(function () {
    $("#imageInput").click();
});

// Trigger the displayImage function when a file is selected
$("#imageInput").change(function () {
    displayImage(this);
});

// Function to display the uploaded images inside the div
function displayImagesMulti(input) {
    if (input.files && input.files.length > 0) {
        $("#uploadDivMulti").empty(); // Clear existing images

        // Loop through each selected file
        for (var i = 0; i < input.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#uploadDivMulti").append(
                    '<img src="' + e.target.result + '" class="img-fluid">'
                );
            };
            reader.readAsDataURL(input.files[i]);
        }
    }
}

$(document).ready(function () {
    
    $("#images").change(function (event) {
        $("#imagePreview").html("");
        var files = event.target.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();
            reader.onload = function (e) {
                var container = $("<div>").addClass("col-md-2 col-sm-4 imagePreviewChild");

                var image = $("<img>").attr({
                    src: e.target.result,
                });

                var name = prompt("Enter name for this image:");
                image.attr("alt", name);
                container.append(image);

                var nameElement = $("<p>").text(name);
                container.append(nameElement);

                var deleteButton = $("<button>")
                    .text("❌")
                    .css({
                        background: "transparent",
                        border: "none",
                        color: "red",
                        fontSize: "12px",
                        cursor: "pointer",
                    })
                    .click(function () {
                        if (
                            confirm(
                                "Are you sure you want to delete this image?"
                            )
                        ) {
                            $(this).parent().remove();
                            return false;
                        }
                    });
                container.append(deleteButton);

                $("#imagePreview").append(container);
            };
            reader.readAsDataURL(file);
        }
    });

    $("#uploadForm").submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        var formData = new FormData(this); // Create form data object
        var images = $(".filename");
        images.each(function () {
            formData.append("image_names[]", $(this).html()); // Append image names to form data
        });

        route = $(this).attr("action");

        // Send form data to server using ajax
        $.ajax({
            url: route,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
              
                if(response.status == "success"){
                    console.log(response.message)
                    location.reload();
                } 
            },
            error: function (xhr, status, error) {
                console.error(
                    "There was a problem with your ajax request:",
                    error
                );
            },
        });
    });
 
    
     
    // FIXME : enable image & table resize
    document.execCommand("enableAbsolutePositionEditor", false, true);
    document.execCommand("enableInlineTableEditing", false, true);
    document.execCommand("enableObjectResizing", false, true);

    // TODO : enable insert table

    $(".btns button").click(function (evt) {
        let value = null;
        if ($(this).hasClass("prompt")) {
            value = prompt("Enter the link here: ", "http://");
        }
        execCmd($(this).data("cmd"), value);
    });

    $(".btns select").change(function (evt) {
        execCmd($(this).data("cmd"), $(this).val());
    });

    $(".btns input").change(function (evt) {
        execCmd($(this).data("cmd"), $(this).val());
    });

    function execCmd(cmd, value) {
        document.execCommand(cmd, false, value);
    }

    function getStyle() {
        const colour = document.queryCommandValue("ForeColor");
        const fontSize = document.queryCommandValue("FontSize");

        alert(colour + ", " + fontSize);
    }
});
