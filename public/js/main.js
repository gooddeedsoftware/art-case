$(document).ready(function(){

  $(".poetryLike").on("click", "i", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".poetryLike").on("click", ".active", function () {
    $(this).removeClass("active");
  });

  $(".poetryProLike").on("click", "i", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".poetryProLike").on("click", ".active", function () {
    $(this).removeClass("active");
  });

$(".testimonial-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    // stagePadding:50,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      2000: {
        items: 1,
      },
    },
  });
  
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    // autoplayTimeout: 2000,
    stagePadding:50,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 5,
      },
    },
  });

$(document).on("click", ".pagging .page", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

});