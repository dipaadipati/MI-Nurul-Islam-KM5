$(document).ready(function () {
  $("#autoWidth").lightSlider({
    adaptiveHeight: true,
    auto: true,
    item: 1,
    slideMargin: 0,
    loop: true,
  });
});

const navbarHome = document.querySelector(".navbarHome");

window.addEventListener("scroll", () => {
  const post = window.scrollY > 100;
  const hide = window.scrollY > 800;

  navbarHome.classList.toggle("scroll", post);
  navbarHome.classList.toggle("hide", hide);
});
