$(document).ready(function(){
  $('.signup-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000
  });

  $("img").height($(".main-box").height());

  $(".to-signin").on("click", function () {
    $(this)
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signup").slideUp(500);
    $(".form-signin").slideDown(500);
  });

  $(".to-signup").on("click", function () {
    $(this)
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signin").slideUp(500);
    $(".form-signup").slideDown(500);
  });

  $(".to-signin-link").on("click", function () {
    $(".to-signin")
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signup").slideUp(200);
    $(".form-signin").slideDown(200);
  });

  $(".to-signup-link").on("click", function () {
    $(".to-signup")
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signin").slideUp(200);
    $(".form-signup").slideDown(200);
  });});
  /*function validateForm() {
    let x = document.forms["myForm"]["email"].value;
    let y = document.forms["myForm"]["password"].value;
    if (x == "xyz@abc.com" && y == "1234abcd") {
      return true; }
    else{
      alert("WRONG EMAIL AND PASSWORD");
      return false;
    }*/
