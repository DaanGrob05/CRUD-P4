const toTopButton = document.getElementById("toTopButton");

// Bepaald of de knop zichtbaar is
window.onscroll = function () {
    scrollFunction();
};

// Als de gebruiker 20 pixels naar beneden scrollt, toon de knop
function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        toTopButton.style.display = "block";
    } else {
        toTopButton.style.display = "none";
    }
}

// Als op de knop gedrukt word, ga naar boven
function topFunction() {
    // Safari (Niet kunnen testen)
    document.body.scrollTo({
        top: 0,
        behavior: "smooth",
    });

    // Chrome, Firefox, IE en Opera
    document.documentElement.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

toTopButton.addEventListener("click", topFunction);
