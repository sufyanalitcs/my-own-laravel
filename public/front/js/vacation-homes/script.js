$(document).ready(function() {
    let $range = $(".js-range-slider"),
        $from = $(".from"),
        $to = $(".to"),
        range,
        min = $range.data("min"),
        max = $range.data("max"),
        from,
        to;

    let updateValues = function () {
        $from.text(from); // Set text instead of input value
        $to.text(to); // Set text instead of input value
    };

    $range.ionRangeSlider({
        onChange: function (data) {
            from = data.from;
            to = data.to;
            updateValues();
        },
    });

    range = $range.data("ionRangeSlider");
    let updateRange = function () {
        range.update({
            from: from,
            to: to,
        });
    };

    $(".service-preload").hide();

 
    // $(document).on("change","#orderby",function(){                    
    //     $("#order").val($("#orderby option:selected").val());
    //     $("#frmFilter").submit(); 
    // });
    

    // $(document).on("click","#filter-search",function(){
    //     $("#frmFilter").submit();
    // });


    
    fetchProducts();

    // Function to handle pagination requests
       $(document).on('click', '.pagination a.page-link', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        fetchProducts(page);
    });

    $("#orderby").change(function(e) {                    
        e.preventDefault(); // Prevent the form from submitting normally
        $("#order").val($(this).val());
        fetchProducts();
    });
    
    $("#filter-search").click(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally
        fetchProducts();
    });

    // Function to fetch products using AJAX
    function fetchProducts(page = 1) {
        // let formData = $("#frmFilter").serialize();

        let formData = $("#frmFilter").serialize() + '&page=' + page;

        let url = $("#frmFilter").attr("action");
        
        $.ajax({
            type: "GET",
            url: url,
            data: formData,
            dataType: "json",
            success: function(response) {
                $(".service-preload").hide();
                // Update the product listing and pagination
                $(".service-div").html(response.properties);
                $("#property_count").html(response.property_count);
            },
            beforeSend: function( ){
                $(".service-preload").show();
              },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

});
