var $ = jQuery;


$(document).ready(function(){
  $('.single-item').slick({
    prevArrow:$('.slick-nav .left'),
    nextArrow:$('.slick-nav .right')
  });
  
  $('#slideshow').slick({
      arrows: false,
      dots: true
  });

  $('.slider-logo').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true
  });

  $('.four-column').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: true
  });

  $(".tab-itm").on("click", function(){
    $(".active-tab").removeClass("active-tab")
    var activeTab =  $ (this).data("tab")
    $("[data-tab='"+activeTab+"']").addClass("active-tab")
  })
});

$(".has-popup").on("click", function() {
  $(".modal-box, .modal").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close-icon, .modal-box").on("click", function() {
  $(".modal-box, .modal").removeClass("active");
});

