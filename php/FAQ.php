<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>FAQ - EFREI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include("header.php");?>
    <h1>FAQ - EFREI</h1>

    <div class="tabs">
        <button class="tab-btn active" onclick="showTab('admissions', this)">
            Admissions & candidatures
        </button>
        <button class="tab-btn" onclick="showTab('cursus', this)">
            Formations & cursus
        </button>
    </div>

    <div id="admissions" class="tab-content active">

        <div>
            <button onclick="toggle(this)">Quelles sont les voies d'admission à l'EFREI ?</button>
            <p style="display:none;">Vous pouvez intégrer l'EFREI via Parcoursup, le concours Advance ou en admissions parallèles.</p>
        </div>

        <div>
            <button onclick="toggle(this)">Comment candidater via Parcoursup ?</button>
            <p style="display:none;">Il faut créer un dossier sur la plateforme Parcoursup et sélectionner les formations EFREI.</p>
        </div>

        <div>
            <button onclick="toggle(this)">Qu'est-ce que le concours Puissance Apha ?</button>
            <p style="display:none;">C'est un concours commun permettant d'intégrer plusieurs écoles d'ingénieurs, dont l'EFREI.</p>
        </div>

        <div>
            <button onclick="toggle(this)">Quels sont les frais de scolarité ?</button>
            <p style="display:none;">Les frais varient selon les années et les formations.</p>
        </div>

    </div>

    <div id="cursus" class="tab-content">
        <div>
            <button onclick="toggle(this)">L'EFREI propose-t-elle des formations en alternance ?</button>
            <p style="display:none;">Oui, certaines formations sont accessibles en alternance.</p>
        </div>

        <div>
            <button onclick="toggle(this)">Y a-t-il un niveau d'anglais requis ?</button>
            <p style="display:none;">Un bon niveau d'anglais est recommandé.</p>
        </div>

        <div>
            <button onclick="toggle(this)">Quand se déroulent les journées portes ouvertes ?</button>
            <p style="display:none;">Les dates sont disponibles sur le site officiel.</p>
        </div>

    </div>

    <?php include("footer.php");?>
    <script>
        function toggle(button) {
            let answer = button.nextElementSibling;
            if (answer.style.display === "none") {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
        }
        function showTab(tabId) {
            let contents = document.querySelectorAll('.tab-content');
            let buttons = document.querySelectorAll('.tab-btn');

            contents.forEach(c => c.classList.remove('active'));
            buttons.forEach(b => b.classList.remove('active'));

            document.getElementById(tabId).classList.add('active');
            element.classList.add('active');
        }
    </script>
</body>
</html>