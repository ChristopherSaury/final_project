// on commence par sélectionner les class .home-slideshow (le containeur des images) et
//.home-slideshow-image qui permet de sélectionner toutes les images

const slideshowImages = document.querySelectorAll(
  ".home-slideshow .home-slideshow-image"
);

// On stock dans des variables le délai avant chaque transition et une valeurs index à
// partir de 0 qui va nous permettre de commencer à  partir la première image
const nextImageDelay = 6000;
let currentImageCounter = 0;

// on change l'opacité de 0 à 1 pour chaque transition pour faire apparaître une nouvelle image
slideshowImages[currentImageCounter].style.opacity = 1;

// On utilise la fonction setInterval qui va appeler la fonction nextImage dans chaque interval défini
setInterval(nextImage, nextImageDelay);

function nextImage() {
  slideshowImages[currentImageCounter].style.opacity = 0;
  currentImageCounter = (currentImageCounter + 1) % slideshowImages.length;
  slideshowImages[currentImageCounter].style.opacity = 1;
}

// Partie reveal on scroll
// On commence par ajouter un listener qui va écouter le scroll sur la page puis appeler la fonction reveal
window.addEventListener("scroll", reveal);

function reveal() {
  let reveals = document.querySelectorAll(".reveal");
  for (let i = 0; i < reveals.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = reveals[i].getBoundingClientRect().top;
    let revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
