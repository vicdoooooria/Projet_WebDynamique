<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css" version="1.0">
    <script type="text/javascript" src="../permanence.js"></script>
</head>
<body>  <!-- http://localhost/Projet_WebDynamique/php/accueil.php -->
    <?php include("header.php");?>
    <section id="accueil">    
        <h1 id="titre-page">Page d'accueil</h1>
        <h2 id="sous-titre">Ingénierie, création, innovation</h2>
        <p class="citation">"Intégrer l’Efrei, c’est rejoindre une école engagée dans la révolution numérique, qui vise l’excellence et qui met au premier plan l’expérience étudiante !" - Frédéric Meunier, Directeur général de l’Efrei</p>
        <ul>
            <li>1ère ÉCOLE PRIVÉE D’INGÉNIEURS INFORMATIQUE (L’Étudiant)</li>
            <li>2ème ÉCOLE D’INGÉNIEURS PRIVÉE (L’Usine Nouvelle)</li>
            <li>3ème ÉCOLE D’INGÉNIEURS POST-BAC (Essentiel du Sup’)</li>
        </ul>
    </section>
    <section>
        <p>
            Ce projet consiste à concevoir une interface web moderne et intuitive destinée à présenter l’univers de l’Efrei. L’objectif est de proposer une navigation simple, un design épuré et des contenus structurés afin de valoriser les formations, les équipes pédagogiques et les services proposés par l’école. L’interface doit permettre aux futurs étudiants, aux parents et aux partenaires de découvrir facilement les différentes filières, les projets étudiants, les événements et les actualités de l’Efrei. En mettant en avant les atouts de l’école, ce projet vise à renforcer la visibilité de l’Efrei et à attirer de nouveaux talents dans le domaine de l’ingénierie informatique.
        </p>
        <hr>
        <p>
            Le département Ingénierie & Numérique de l’Efrei forme des étudiants aux technologies de pointe, en combinant théorie, pratique et projets concrets. Il regroupe plusieurs domaines tels que le développement logiciel, la cybersécurité, les réseaux, l’IA et la data, permettant aux étudiants d’acquérir des compétences solides et polyvalentes.
        </p>
    </section>
    <section id="efrei">
        <img src="../img/chouette_efrei.jpg" alt="image du campus principal de l'efrei" id="chouette">
        <h3>L'EFREI</h3>
        <p>
            L’Efrei est une grande école d’ingénieurs du numérique reconnue pour son excellence académique et son ouverture internationale. Depuis plus de 90 ans, elle forme des professionnels capables d’innover, de s’adapter et de relever les défis technologiques de demain. Son campus dynamique, ses partenariats industriels et son esprit associatif en font un environnement idéal pour développer son potentiel.
        </p>
        <input type="button" value="Plus d'informations" onclick='window.location.href="http://www.efrei.fr/"'>
    </section>
    <section>
        <h2>Actualités</h2>
        <h3>Découvrez les dernières nouvelles de 2026 de l'Efrei !</h3>
        <div class="carousel-wrapper">
            <ul class="carousel-track" id="carouselTrack">


                        <li class="carousel-item">Efrei Aides Humanitaires : au coeur de la solidarité <small>19 MARS 2026</small></li>
                        <li class="carousel-item">Expo photo : l'innovation n'a pas de genre <small>12 MARS 2026</small></li>
                        <li class="carousel-item">Culture et sport à Villejuif : les bons plans étudiants <small>19 FÉVRIER 2026</small></li>
                        <li class="carousel-item">Portfolia : créez votre identité professionnelle <small>10 FÉVRIER 2026</small></li>
                        <li class="carousel-item">Campagne BDE : propose ta liste ! <small>27 JANVIER 2026</small></li>
                        <li class="carousel-item">Les « micro-agressions » : un phénomène qui nous concerne tous <small>26 JANVIER 2026</small></li>
                        <li class="carousel-item">Bien-manger : nos options saines, savoureuses… et accessibles ! <small>14 JANVIER 2026</small></li>
                        <li class="carousel-item">Certifications professionnelles, passez par la Learning XP <small>5 JANVIER 2026</small></li>
            </ul>
            <div class="carousel-controls">
                <button onclick="moveCarousel(-1)">&#8592;</button>
                <button onclick="moveCarousel(1)">&#8594;</button>
            </div>
            <div class="carousel-dots" id="carouselDots">
                <span class="active" onclick="goToSlide(0)"></span>
                <span onclick="goToSlide(1)"></span>
            </div>
        </div>
    </section>
    </section>
    <section>
        <h2>Avis des étudiants</h2>
        <p>Voici ce que les étudiants de l'Efrei pensent de leur expérience à l'école :</p>
        <div class="avis">
            <ul>
                <li>
                    "J'ai découvert la cybersécurité et l’informatique en arrivant à l’Efrei et j'y ai tout appris. Je pense que les compétences acquises en cybersécurité et en réseau me serviront toujours." <small>- Valentin GOURJON, Cycle Ingénieur Cybersécurité, Infrastructures et Logiciels - Promo 2025</small>
                </li>
                <li>
                    "J'aime la diversité qu'offre l'Efrei. Ici, je profite de l'échange culturel et de ce que l'école nous apprend : la curiosité et goût de la recherche." <small>- Yasmine ZAAFOURI, Master Cybersecurity & Artificial Intelligence - Promo 2025</small>
                </li>
                <li>
                    "La formation en cycle ingénieur est très complexe et diversifiée. En plus de la technique, j’ai développé d’autres compétences comme la communication, le travail en équipe, la gestion de projets..." <small>- Kenny LUDOVIC, Cycle Ingénieur Cybersécurité, SI et gouvernance - Promo 2025</small>
                </li>
            </ul>
        </div>
    </section>
    <section class="chiffres-cles">
        <h2>Chiffres clés</h2>
        <ul class="chiffres">
            <li>Ouverte depuis 1936</li>
            <li>Plus de 2000 étudiants</li>
            <li>16000 alumni</li>
            <li>Plus de 1000 diplômés chaque année</li>
            <li>Un taux d'insertion professionnelle de 95% à 6 mois</li>
            <li>93 universités partenaires</li>
            <li>Plus de 2000 entreprises dans notre réseau</li>
            <li>36 entreprises marraines en formation</li>
            <li>10 chaires d'entreprises</li>
        </ul>
    </section>
    <?php include("footer.php");?>
</body>
</html>