$(document).ready(function(){
    $('.banner_slider').slick({
      autoplay: false,
      arrows: true, 
      fade: false,
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplaySpeed: 3000,
    });
});
$(".banner_slider_for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 300,
  autoplay: false,
  infinite: true,
  arrows: false,
  fade: true,
  asNavFor: ".banner_slider_nav"
});
$(".banner_slider_nav").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  speed: 300,
  autoplay: false,
  infinite: true,
  asNavFor: ".banner_slider_for",
  dots: false,
  arrows: true,
  centerMode: true,
  centerPadding: '0',
  focusOnSelect: true,
});

$(document).ready(function(){
  $('.portfolio_slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    arrows: false, 
    dots: false, 
    autoplaySpeed: 2500,
  });
}); 
 $(document).ready(function () {
    var navHeader = $(".nav_header");

    // Add or remove sticky_header class based on scroll
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        navHeader.addClass("sticky_header");
      } else {
        navHeader.removeClass("sticky_header");
      }
    });
  });