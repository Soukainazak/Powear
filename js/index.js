var images = document.querySelectorAll("article img");
var formats = [];

for (const image of images) {
    formats.push(image.clientHeight / image.clientWidth);
}

var referenceFormat = formats.sort()[0];

var divImages = document.querySelectorAll("article div.img");

for (const div of divImages) {
    div.style.height = div.clientWidth * referenceFormat + "px";
}

window.addEventListener("resize", () => {
    for (const div of divImages) {
        div.style.height = div.clientWidth * referenceFormat + "px";
    }
})
