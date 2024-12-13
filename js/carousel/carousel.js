/////////////////////////////////////////////////////
// Paramètres du Carousel
/////////////////////////////////////////////////////

const arrCarousel = [
    {
        url: "/assets/img/carousel/carrousel1.jpg",
        titre: "Vous cherchez un espace de travail convivial",
        SousTitre: "Bureaux en open space ou privatifs",
    },
    {
        url: "/assets/img/carousel/carrousel2.jpg",
        titre: "Vous êtes soucieux de l'environnement",
        SousTitre: "Énergie bas carbone - Informatique GreenIt",
    },
    {
        url: "/assets/img/carousel/carrousel3.jpg",
        titre: "Vous cherchez une salle de réunion",
        SousTitre: "Équipement moderne - Vidéoprojecteur",
    },
]

const period = 5000

/////////////////////////////////////////////////////
// Éléments du DOM
/////////////////////////////////////////////////////

const elCarousel = document.querySelector(".carousel")
const elPrecedent = document.querySelector(".carousel_btnPrev")
const elSuivant = document.querySelector(".carousel_btnNext")
const elTitre = document.querySelector(".carousel_infos-title")
const elSousTitre = document.querySelector(".carousel_infos-subtitle")
const elNav = document.querySelector(".carousel_nav")

/////////////////////////////////////////////////////
// Traitement JavaScript
/////////////////////////////////////////////////////

let counter = 0, max = 0, timer = null

function initCarousel() {
    counter = 0
    max = arrCarousel.length - 1

    for (let i =0; i <= max; i++) {
        elNav.appendChild(addSlideLink("slideLink" + i))
        document.getElementById("slideLink" + i).addEventListener("click", () => changeImage(i, "nav"))
    }

    changeImage(0, "nav")
}

function changeImage (id, mode) {
    if (mode === "nav") {
        counter = id
    }
    else {
        counter += id
        if (counter < 0) counter = max
        if (counter > max) counter = 0
    }

    const arrSliders = document.querySelectorAll(".slideLink")
    arrSliders.forEach ((el) => {
        el.classList.remove("active")
    })

    const elSlider = document.getElementById("slideLink" + counter)
    elSlider.classList.add("active")

    if (mode !== undefined) {
        clearInterval(timer)
        timer = setInterval(() => changeImage (1), period)
    }

    elCarousel.style.backgroundImage = `url(${arrCarousel[counter].url})`
    elTitre.innerHTML = arrCarousel[counter].titre
    elSousTitre.innerHTML = arrCarousel[counter].SousTitre
}

const addSlideLink = (id) => {
    let el = document.createElement("button")

    el.id = id
    el.className = "slideLink"

    return el
}

window.addEventListener("load", initCarousel)
elPrecedent.addEventListener("click", () => changeImage(-1, "btn"))
elSuivant.addEventListener("click", () => changeImage(1, "btn"))
