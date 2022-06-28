const formElement = document.querySelector("#contact");

const name = document.querySelector("#name");
const email = document.querySelector("#email");
const message = document.querySelector("#message");

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
