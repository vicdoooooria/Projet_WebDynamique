<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  <!-- http://localhost/Projet_WebDynamique/php/accueil.php -->
    <?php include("header.php");?>
    <section id="accueil">    
        <h1 id="titre-page">Page d'accueil</h1>
        <h2 id="sous-titre">Ingénierie, création, innovation</h2>
    </section>
    <section>
        <p>
            Ce projet consiste à concevoir une interface web moderne et intuitive destinée à présenter l’univers de l’Efrei. L’objectif est de proposer une navigation simple, un design épuré et des contenus structurés afin de valoriser les formations, les équipes pédagogiques et les services proposés par l’école. L’interface doit permettre aux futurs étudiants, aux parents et aux partenaires de découvrir facilement les différentes filières, les projets étudiants, les événements et les actualités de l’Efrei. En mettant en avant les atouts de l’école, ce projet vise à renforcer la visibilité de l’Efrei et à attirer de nouveaux talents dans le domaine de l’ingénierie informatique.
        </p>
    </section>
    <section>
        <p>
            Le département Ingénierie & Numérique de l’Efrei forme des étudiants aux technologies de pointe, en combinant théorie, pratique et projets concrets. Il regroupe plusieurs domaines tels que le développement logiciel, la cybersécurité, les réseaux, l’IA et la data, permettant aux étudiants d’acquérir des compétences solides et polyvalentes.
        </p>
    </section>
    <section>
        <img src="../img/chouette_efrei.jpg" alt="image du campus principal de l'efrei" id="chouette">
        <h3>L'EFREI</h3>
        <p>
            L’Efrei est une grande école d’ingénieurs du numérique reconnue pour son excellence académique et son ouverture internationale. Depuis plus de 90 ans, elle forme des professionnels capables d’innover, de s’adapter et de relever les défis technologiques de demain. Son campus dynamique, ses partenariats industriels et son esprit associatif en font un environnement idéal pour développer son potentiel.
        </p>
        <input type="button" value="Plus d'informations" onclick='window.location.href="http://www.efrei.fr/"'>
    </section>
        <h2>Actualités</h2>
        <h3>Découvrez les dernières nouvelles de l'Efrei !</h3>
    <section>
    </section>
    <section>
        <h2>Avis des étudiants</h2>
        <p>Voici ce que les étudiants de l'Efrei pensent de leur expérience à l'école :</p>
        <div class="avis">
            <ul>
                <li>
                    "L'Efrei m'a permis de développer mes compétences en informatique tout en m'offrant de nombreuses opportunités de stages et d'échanges internationaux." - Alice, 3ème année
                </li>
                <li>
                    "L'ambiance à l'Efrei est très conviviale, les professeurs sont à l'écoute et les projets sont stimulants." - Bob, 2ème année
                </li>
                <li>
                    "J'apprécie particulièrement la diversité des cours proposés et les nombreux clubs étudiants qui permettent de s'investir dans des projets passionnants." - Charlie, 4ème année
                </li>
            </ul>
        </div>
    </section>
    <section class="chiffres-cles">
        <h2>Chiffres clés</h2>
        <ul class="chiffres">
            <li>Plus de 90 ans d'existence</li>
            <li>Plus de 2000 étudiants</li>
            <li>Plus de 1000 diplômés chaque année</li>
            <li>Un taux d'insertion professionnelle de 95% à 6 mois</li>
            <li>Plus de 2000 entreprises dans notre reseau</li>
            <li>36 entreprises marraines en formation</li>
            <li>10 chaires d'entreprises</li>
        </ul>
    </section>
    <?php include("footer.php");?>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>