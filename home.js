const slideshowImages = document.querySelectorAll(
  ".home-slideshow .home-slideshow-image"
);
console.log(slideshowImages);

const nextImageDelay = 6000;
let currentImageCounter = 0;

slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  slideshowImages[currentImageCounter].style.opacity = 0;
  currentImageCounter = (currentImageCounter + 1) % slideshowImages.length;
  slideshowImages[currentImageCounter].style.opacity = 1;
}
