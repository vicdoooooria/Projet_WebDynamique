<?php ?>

    <section classe="table-des-matieres">
    <ul>
        <li><a href="#section1">Présentation Générale</a></li>
        <li><a href="#section2">Programme Pex et Expert</a></li>
        <li><a href="#section3">Programme Grande Ecole</a></li>
    </ul>
    </section>
    <section>
    <h1>Page du Département Informatique</h1>
    <h2 id="section1">Présentation Générale</h2>
        <p>
            Le département informatique de EFREI Paris forme des ingénieurs spécialisés dans les métiers du numérique à travers un enseignement mêlant théorie et pratique. Les étudiants y abordent des domaines variés comme le développement logiciel, l’intelligence artificielle, la cybersécurité, les réseaux et le cloud, tout en travaillant sur des projets concrets souvent en lien avec des entreprises. La formation met l’accent sur l’employabilité grâce aux stages, à l’alternance et à une forte ouverture internationale, préparant ainsi à des carrières telles que développeur, data scientist ou ingénieur en cybersécurité.
        </p>
    <h2> Programmes par niveau (Détails des formations spécifiques) :</h2>
    <h3 id="section2"> Programme PEX et Expert</h3>
    <h4>Bachelor Ingénierie et Numérique (renommée Bachelor Informatique) -- Grade de Licence</h3>
        <p>
            Le Bachelor Informatique de l’Efrei forme des développeurs polyvalents capable d’opérer aussi bien en tant que Fullstack, DevOps, Back End ou Front End. Ses diplômés peuvent travailler aussi bien au sein d’une association que d’une grande ESN.
        </p>
    <h5> Détail du programme</h5>
        <p>
            Ce cycle de trois ans prépare nos étudiants en combinant formation scientifique et technique avec une formation générale et professionnelle de l’ingénieur appliquée au monde professionnel.
            <ul>
                <li>Sciences appliquées, langues et communication</li>
                <li>Pôle Professionnel et initiation à la recherche</li>
                <li>Spécification des besoins et conduite de prohet numérique</li>
                <li>Information et systèmes d'information</li>
                <li>Développement applications Web et Mobile</li>
                <li>Modules de spécialisation et Learning XP</li>
            </ul>
        </p>
    <h4>Bachelor Cybersécurité et Réseaux -- Grade Licence</h4>
        <p>
            Cette formation prépare les étudiants à concevoir et déployer des stratégies de sécurité des systèmes d’informations qui préviennent efficacement les menaces cyber et y répondent de manière adaptée.
        </p>
    <h5> Détail du programme</h5>
        <p>
            Ce cycle de trois ans prépare nos étudiants en combinant formation scientifique et technique avec une formation générale et professionnelle de l’ingénieur appliquée au monde professionnel.
            <ul>
                <li>Réseaux, Systèmes et Cybersécurité</li>
                <li>Réseaux et Systèmes</li>
                <li>Informatique et Systèmes d'information</li>
                <li>Science appliqués, Langue et Communication</li>
            </ul>
        </p>
    <h3 id="section3"> Programme Grande Ecole</h3>
    <h4>Prépas Intégrés</h4>
        <p>
            Ce cycle en deux ans prépare nos étudiants en combinant formation scientifique et technique avec une formation générale et professionnelle de l’ingénieur.
            <ul>
                <li>1re année de Prépa Scientifique</li>
                <li>1re année de Prépa Scientifique en anglais</li>
                <li>1re année de Prépa Scientifique en rentrée décalée (février 2026)</li>
                <li>1re année de Prépa Bio & Numérique</li>
                <li>1re année de Prépa PLUS</li>
            </ul>
        </p>
    <h4>Cycle Ingénieur</h4>
        <p>
            Cette année de tronc commun se compose d’un semestre à l’international dans le cadre de la mobilité étudiante et d’un semestre de cours à Paris. À son issue, les élèves peuvent choisir une des 13 majeures proposées au sein des 4 filières de l’école en vue de se spécialiser dans un domaine précis du numérique.
            <ul>
                <li>Filière Information Technology</li>
                <li>Filière Sécurité et Réseaux</li>
                <li>Filière Data Science</li>
                <li>Filière Système embarqués</li>
            </ul>
        </p>

<script>
        // Défilement fluide
    document.querySelectorAll('.table-des-matieres a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Mettre en évidence la section active
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('h2');
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.scrollY >= sectionTop - 100) {
                currentSection = section.getAttribute('id');
            }
        });

        document.querySelectorAll('.table-des-matieres a').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
    });
</script>
</section>