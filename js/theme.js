// @codekit-prepend "lightbox.js" quiet;
function moreFunction() {
  const element = document.querySelector(".more");
  element.classList.toggle("active");
}

function loginFunction() {
  const element = document.getElementById("login");
  element.classList.toggle("active");
}
function menuFunction() {
  const element = document.getElementById("menu-toggle"),
    ham = document.getElementById("hamburger");
  element.classList.toggle("active");
  ham.classList.toggle("active");
}
function toggleMe() {
  const list = document.querySelectorAll(".body, .menu-con");
  for (const element of list) {
    element.classList.toggle("active");
  }
}

const elements = document.getElementsByClassName("more");

const myFunction = function () {
  const moreBody = this.querySelector(".more__action");
  moreBody.parentNode.classList.toggle("active");
};

for (var i = 0; i < elements.length; i++) {
  elements[i].addEventListener("click", myFunction, false);
}
