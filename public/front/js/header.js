$(document).ready(function () {
    var navbar2 = document.querySelector("#main-nav");
    var navbar1Height = document.querySelector("#top-nav").offsetHeight;

    window.addEventListener("scroll", function () {
        if (window.pageYOffset >= navbar1Height) {
            navbar2.classList.add("fixed");
        } else {
            navbar2.classList.remove("fixed");
        }
  
    });

    
    
});
