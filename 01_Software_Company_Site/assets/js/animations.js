// Fade-in animation for sections
$(document).ready(function () {
  $(window).on("scroll", function () {
    $(".service-box, .card").each(function () {
      if (
        $(this).offset().top <
        $(window).scrollTop() + $(window).height() - 50
      ) {
        $(this).addClass("animate__fadeInUp");
      }
    });
  });
});
