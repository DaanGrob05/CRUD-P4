require("./bootstrap");
const landingSpacer = document.querySelector(".landingSpacer");
// function loadImages(backgroundImages, callback) {
//     var images = {};
//     var loadedImages = 0;
//     var numImages = 0;
//     for (var src in backgroundImages) {
//         numImages++;
//     }
//     for (var src in backgroundImages) {
//         images[src] = new Image();
//         images[src].onload = function () {
//             if (++loadedImages >= numImages) {
//                 callback(images);
//             }
//         };
//         images[src].src = backgroundImages[src];
//     }
// }
const backgroundSlider = () => {
    const backgroundImages = [
        "https://images.pexels.com/photos/460376/pexels-photo-460376.jpeg",
        "https://images.pexels.com/photos/2131623/pexels-photo-2131623.jpeg",
        "https://images.pexels.com/photos/4125993/pexels-photo-4125993.jpeg",
    ];

    let i = 0;
    setInterval(() => {
        landingSpacer.style.backgroundImage = `url(${backgroundImages[i]})`;
        i++;
        if (i === backgroundImages.length) {
            i = 0;
        }
    }, 3000);
};
// $(document).ready(function () {
//     loadImages(backgroundImages, buildStage);
// });
// backgroundSlider();
