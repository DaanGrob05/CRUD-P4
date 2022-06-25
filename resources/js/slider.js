require("./bootstrap");
const landingSpacer = document.querySelector(".landingSpacer");
function loadImages(backgroundImages, callback) {
    var images = {};
    var loadedImages = 0;
    var numImages = 0;
    for (var src in backgroundImages) {
        numImages++;
    }
    for (var src in backgroundImages) {
        images[src] = new Image();
        images[src].onload = function () {
            if (++loadedImages >= numImages) {
                callback(images);
            }
        };
        images[src].src = backgroundImages[src];
    }
}
const backgroundSlider = () => {
    const backgroundImages = [
        "https://images.pexels.com/photos/507410/pexels-photo-507410.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        ,
    ];

    let i = 0;
    setInterval(() => {
        landingSpacer.style.backgroundImage = `(${backgroundImages[i]})`;
        i++;
        if (i === backgroundImages.length) {
            i = 0;
        }
    }, 100);
};
$(document).ready(function () {
    loadImages(backgroundImages, buildStage);
});
backgroundSlider();
