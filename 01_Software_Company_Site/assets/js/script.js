// Add sticky class to navbar on scroll
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  const sticky = navbar.offsetTop;

  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});
