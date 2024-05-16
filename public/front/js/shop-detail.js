$(document).ready(function () {
  $(document).on("click", ".showMoreBtn", function () {
    $(this).siblings(".review-para-content").toggleClass("expanded");

    if ($(this).siblings(".review-para-content").hasClass("expanded")) {
      $(this).text("Show Less");
    } else {
      $(this).text("Read More");
    }
  });

  // required elements
  var imgPopup = $(".img-popup");
  var imgCont = $(".container__img-holder");
  var popupImage = $(".img-popup img");
  var closeBtn = $(".close-btn");

  // handle events
  imgCont.on("click", function () {
    var img_src = $(this).children("img").attr("src");
    imgPopup.children("img").attr("src", img_src);
    imgPopup.addClass("opened");
  });

  $(imgPopup, closeBtn).on("click", function () {
    imgPopup.removeClass("opened");
    imgPopup.children("img").attr("src", "");
  });

  popupImage.on("click", function (e) {
    e.stopPropagation();
  });

  var slider = new Swiper(".gallery-slider", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 6,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var thumbs = new Swiper(".gallery-thumbs", {
    slidesPerView: "auto",
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
  });

  slider.controller.control = thumbs;
  thumbs.controller.control = slider;

  // const rangeInput = document.getElementById("rangeInput");

  // function updateRangeBackground() {
  //   const percentage =
  //     (rangeInput.value - rangeInput.min) / (rangeInput.max - rangeInput.min);
  //   const yellowPercentage = percentage * 100;
  //   rangeInput.style.background = `linear-gradient(to right, #ff9400 ${yellowPercentage}%, #d3d3d3 ${yellowPercentage}%, #d3d3d3 100%)`;
  // }

  // updateRangeBackground();

  const rangeInputs = document.querySelectorAll(".range-input");

  function updateRangeBackground(input) {
    const percentage = (input.value - input.min) / (input.max - input.min);
    const yellowPercentage = percentage * 100;
    input.style.background = `linear-gradient(to right, #ff9400 ${yellowPercentage}%, #d3d3d3 ${yellowPercentage}%, #d3d3d3 100%)`;
  }

  rangeInputs.forEach((input) => {
    updateRangeBackground(input);
    input.addEventListener("input", () => updateRangeBackground(input));
  });

  $(function () {
    $("#datepicker").datepicker();
  });

  // Swiper: time Slider
  new Swiper(".time-slot", {
    loop: true,
    nextButton: ".time-button-next",
    prevButton: ".time-button-prev",
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 20,
    breakpoints: {
      1920: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1028: {
        slidesPerView: 6,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });

  // ====================================================================================================

  const cards = document.querySelectorAll(".book-service-card");

  let draggedCard = null;

  cards.forEach((card) => {
    card.addEventListener("dragstart", dragStart);
    card.addEventListener("dragend", dragEnd);
  });

  function dragStart() {
    draggedCard = this;
    setTimeout(() => {
      this.style.display = "none";
    }, 0);
  }

  function dragEnd() {
    draggedCard = null;
    setTimeout(() => {
      this.style.display = "block";
    }, 0);
  }

  document.addEventListener("dragover", (e) => {
    e.preventDefault();
  });

  document.addEventListener("drop", (e) => {
    e.preventDefault();
    const dropZone = closest(e.target, ".book-service-card");
    if (dropZone) {
      const cardBounding = dropZone.getBoundingClientRect();
      const mouseY = e.clientY;
      const isAfter = mouseY > cardBounding.top + cardBounding.height / 2;

      if (draggedCard !== dropZone) {
        if (isAfter) {
          dropZone.parentNode.insertBefore(draggedCard, dropZone.nextSibling);
        } else {
          dropZone.parentNode.insertBefore(draggedCard, dropZone);
        }
      }
    }
  });

  function closest(el, selector) {
    let element = el;
    while (element) {
      if (element.matches(selector)) {
        return element;
      }
      element = element.parentElement;
    }
    return null;
  }

  // ====================================================================================================

});

  // =============================================
  $(document).ready(function(){
    $('#service-search').on('input', function() {
        var searchText = $(this).val().toLowerCase(); // Convert input text to lowercase
        var found = false; // Flag to track if any match is found

        $('.service-name').each(function() { // Loop through each service name
            var serviceName = $(this).text().toLowerCase(); // Get service name text in lowercase
            var $serviceItem = $(this).closest('.service-item'); // Get parent service item

            if (serviceName.includes(searchText)) { // Check if service name contains input text
                $serviceItem.show(); // Show service item if text matches
                found = true; // Set flag to true if match is found
            } else { 
                $serviceItem.hide(); // Hide service item if text doesn't match
            }
        });

        if (!found) { // If no match is found
            $('#no-results').show(); // Show the message for no results
        } else {
            $('#no-results').hide(); // Hide the message if results are found
        }
    });
});
