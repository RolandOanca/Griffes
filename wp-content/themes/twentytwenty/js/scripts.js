var $ = jQuery;


$(document).ready(function(){

  $(".tab-itm").on("click", function(){
    console.log('asdasda');
    $(".active-tab").removeClass("active-tab")
    var activeTab =  $ (this).data("tab")
    console.log(activeTab);
    console.log($("[data-tab='"+activeTab+"']"));
    $("[data-tab='"+activeTab+"']").addClass("active-tab")
  })


  $('.slider-logo').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
          slidesToShow: 3
      }
  },
  {
      breakpoint: 766,
      settings: {
          slidesToShow: 1,
      }
  }
]
  });

  $('.single-item').slick({
    prevArrow:$('.slick-nav .left'),
    nextArrow:$('.slick-nav .right')
  });
  
  $('#slideshow').slick({
      arrows: false,
      dots: true
  });

  

  $('.four-column').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
          slidesToShow: 2
      }
  },
  {
      breakpoint: 766,
      settings: {
          slidesToShow: 1,
      }
  }
]
  });

});



//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close-icon, .modal-box").on("click", function() {
  $(".modal-box, .modal").removeClass("active");
});

$(document)
.on('click', '.box.has-popup', function(e){

    e.preventDefault();

    // var img = $(this).find('img').attr('src');
    var img = $(this).find('img').data('large-img');
    var title = $(this).find('.box-description h4').html();
    var long_desc = $(this).find('.box-description').data('long-description');

    var html_modal = '';
    html_modal+= '<section id="modal-box">';
    html_modal += '<div class="modal">';
      html_modal += '<div class="modal-content modal-unirii">';
        html_modal += '<div class="close-icon">';
            html_modal += '<i class="fa fa-times" aria-hidden="true"></i>';
            html_modal += '</div>';
        html_modal += '<div class="row">';
        html_modal += '</div>';
        html_modal += '<div class="row">';
          html_modal += '<div class="modal-title">';
            html_modal += '<div class="columns col-sm-12">';
              html_modal += '<h2>'+ title +'</h2>';
            html_modal += '</div>';
          html_modal += '</div>';
        html_modal += '</div>';
         html_modal += '<div class="row">';
        html_modal += '<div class="columns col-sm-12">';
            html_modal += '<div class="modal-img" style="background-image: url('+ img +')">';
             
            html_modal += '</div>';
          html_modal += '</div>';
        html_modal += '</div>';
        html_modal += '<div class="row">';
          html_modal += '<div class="modal-decription">';
            html_modal += '<div class="columns col-sm-12">';
              html_modal += long_desc;
            html_modal += '</div>';
          html_modal += '</div>';
        html_modal += '</div>';
        html_modal += '</div>';
      html_modal += '</div>';
    html_modal += '</section>';

    $('body').append(html_modal);
    $('#modal-1').css("display", "block");
});

$(document)
.on('click touchstart', '.close-icon', function(e){
    e.preventDefault();
    
    $('#modal-box')
        .css('display' , 'none')
        .remove();
});

$( document ).on( 'keydown', function ( e ) {
if ( e.keyCode === 27 ) { // ESC
    $('#modal-box').hide().remove();

}
});

$(document)
.on('click', 'ul li.about-us', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#about-us').offset().top -100
    },800);
});

$(document)
.on('click', 'ul li.properties', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#properties').offset().top
    },800);
});


$(document)
.on('click', 'li.services', function(e){
    e.preventDefault();
    $('html,body').animate({
        scrollTop: $('#services').offset().top
    },800);
});

$(document).on('click', 'li.implantation', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('.tab-nav [data-tab="0"]').offset().top - 120
    },800);
    $('.tab-nav [data-tab="0"]').click();
});

$(document).on('click', 'li.realestate', function(e){
  e.preventDefault();
  e.stopPropagation();
  $('html,body').animate({
      scrollTop: $('.tab-nav [data-tab="1"]').offset().top - 120
  },800);
  $('.tab-nav [data-tab="1"]').click();
});

$(document).on('click', 'li.marketing', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('.tab-nav [data-tab="2"]').offset().top - 120
    },800);
    $('.tab-nav [data-tab="2"]').click();
});

$(document)
.on('click', 'ul li.clients', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#our-clients').offset().top-100
    },800);
});

$(document)
.on('click', 'ul li.properties', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#properties').offset().top-100
    },800);
});

$(document)
.on('click', 'ul li.clients-say', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#clients-say').offset().top-100
    },800);
});

$(document)
.on('click', 'ul li.news', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#latest-news').offset().top-100
    },800);
});
$()

$(document)
.on('click', 'ul li.marketing', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#latest-news').offset().top-100
    },800);
});
$()
$(document)
.on('click', 'ul li.contact', function(e){
    e.preventDefault();
    e.stopPropagation();
    $('html,body').animate({
        scrollTop: $('#contact').offset().top-100
    },800);
});
$()


    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
      if (scroll >= 100) {
          $("header").addClass("lightheader");
      } else {
          $("header").removeClass("lightheader");
      }
  });

  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 900) {
        $(".sub-menu").addClass("addcolor");
    } else {
        $(".sub-menu").removeClass("addcolor");
    }
});

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 300) {
      $(".sticky-logo").addClass("sticky-logo-visibel");
  } else {
      $(".sticky-logo").removeClass("sticky-logo-visibel");
  }
});

  
