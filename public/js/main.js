window.addEventListener("scroll", function () {
  var header = this.document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// Show navbar
const navEl = document.querySelector("nav");
const hamburgerEl = document.querySelector(".hamburger-menu");

hamburgerEl.addEventListener("click", () => {
  navEl.classList.toggle("show-nav");
  hamburgerEl.classList.toggle("hamburger-open");
});
