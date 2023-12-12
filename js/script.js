/* Mise en place du défilement des nuages */

/*Ecouteur d'évenement de défilement*/
window.addEventListener(
    'scroll',function () {
        /*Séléction du DOM (récuperation des références HTML avec classes*/
        const bigCloud = document.querySelector('.big_cloud');
        const littleCloud = document.querySelector('.little_cloud');
        const cloudSection = document.querySelector('#place');

        /*Calcul de la position de la section 'cloud'*/
        const positionCloudSection = cloudSection.offsetTop;

        /*Obtention de la position de défilement'*/
        const scrollPosition = window.scrollY || document.documentElement.scrollTop;

        /*Obtention de la position de défilement'*/
        if (scrollPosition >= positionCloudSection){

            /*Calcul de la valeur de parallaxe*/
            let parralaxValue = (scrollPosition - positionCloudSection)/5;
            parralaxValue = Math.min(parralaxValue,300);

            /*Application de la transformation CSS aux éléments*/
            bigCloud.style.transform='translateX('+(-parralaxValue)+'px)';
            littleCloud.style.transform='translateX('+(-parralaxValue)+'px)';
        }
    }
)

/*Initialisation du swiper*/
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        speed: 1000,
        autoplay: {
          delay: 250,
        },
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 60,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
            /*pause entre chaque diapositive en millisecondes (5 secondes)*/
            delay: 2500, 
            /*L'autoplay continue même lorsque on interagit avec le slider*/
            disableOnInteraction: false,
        },
    });
});

 //Gestion de la rotation de l'animation au défilement//
 window.addEventListener("scroll", () => {
    var vertical = -1;
    setInterval(function () {
      if (window.scrollY != vertical) {
        vertical = window.scrollY;
        document.documentElement.style.setProperty("--animation-duration", "3s");
      } else {
        document.documentElement.style.setProperty("--animation-duration", "15s");
      }
    }, 500);
  });


// Animation FadeIn //
const sections = document.querySelectorAll('.story, #characters, #place, #studio, footer');

// Création de l'observateur //
const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            fadeInAnimation(entry);
            observer.unobserve(entry.target);
        }
    });
}, { });

// Ajout de l'observateur d'intersection à chaque section //
sections.forEach((section) => {
    sectionObserver.observe(section);
});

function fadeInAnimation(entry) {
    // Ajout de la classe 'fadeIn'à l'element "entry" pour déclencher l'animation de fade-in créé en css
    entry.target.classList.add('fadeIn');


    // Animation apparition des titres
    // Sélection de l'élément de titre (h2 ou h3) dans l'élément cible
    const title = entry.target.querySelector('h2, h3');

    // Vérification si le titre existe et s'il a du contenu
    if (title && title.textContent) {
        // Division du contenu du titre en mots
        const words = title.textContent.split(' ');

        // Effacement du contenu du titre
        title.textContent = '';

        // Création d'éléments 'span' pour chaque mot du titre et ajout de la classe 'titleAnimation'
        words.forEach((word) => {
            const span = document.createElement('span');
            span.classList.add('titleAnimation');
            span.textContent = word;
            title.appendChild(span);
        });

        // Sélection de tous les éléments 'span' avec la classe 'titleAnimation' à l'intérieur du titre
        const spans = title.querySelectorAll('.titleAnimation');

        // Ajout progressif de la classe 'visibility' à chaque élément 'span' avec un délai
        spans.forEach((span, index) => {
            const delay = 400 + index * 400;

            setTimeout(() => {
                span.classList.add('visibility');
            }, delay);
        });
    }
}

// Gestion de la fermeture et de l'ouverture de la modale avec jQuery
(function ($) {
    $(".burger_open").click(function () {
    // Animation de "modale" avec animate //
      $(".modal-content").animate(
        { height: "toggle", opacity: "toggle" },
        1000
      );
      $(".modal-content").toggleClass("open");
      $(".modal-toggle").toggleClass("close");
    });
    // Au clic sur n'importe quel lien <a>, on vérifie si l'élément avec la classe "modal-content" a la classe "open" //
    $("a").click(function () {
      if ($(".modal-content").hasClass("open")) {
        $(".modal-content").animate(
          { height: "toggle", opacity: "toggle" },

          1000
        );
        $(".modal-content").removeClass("open");
        $(".modal-toggle").removeClass("close");
      }
    });
  })(jQuery);