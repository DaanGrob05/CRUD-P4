/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/formValidation.js ***!
  \****************************************/
var formElement = document.querySelector("#contact");
var name = document.querySelector("#name");
var email = document.querySelector("#email");
var message = document.querySelector("#message");
formElement.addEventListener("submit", function (event) {
  event.preventDefault();

  if (name.value === "") {
    name.style.borderColor = "red";
  } else {
    name.style.borderColor = "";
  }

  if (email.value === "") {
    email.style.borderColor = "red";
  } else {
    email.style.borderColor = "";
  }

  if (message.value === "") {
    message.style.borderColor = "red";
  } else {
    message.style.borderColor = "";
  }
});
/******/ })()
;