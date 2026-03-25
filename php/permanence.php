<?php ?>
<section>
    <div class="reservation-container">
        <form  method='POST' action='departement.php'>
        <h1>Réserver une permanence</h1>
        <form id="reservationForm">
            <div class="form-group">
                <label for="nom">Nom et Prénom</label>
                <input type="text" id="nom" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="role">Rôle</label>
                <select id="role" required>
                    <option value="">Sélectionnez un rôle</option>
                    <option value="élève">Élève</option>
                    <option value="professeur">Professeur</option>
                    <option value="administrateur">Administrateur</option>
                    <option value="surveillant">Surveillant</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="classe">Classe</label>
                <select id="classe" required>
                    <option value="">Sélectionnez une classe</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="P1">P1</option>
                    <option value="P2">P2</option>
                    <option value="ING1">ING1</option>
                    <option value="ING2">ING2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="matiere">Matière</label>
                <select id="matiere" required>
                    <option value="">Sélectionnez une matière</option>
                    <option value="Mathématiques">Mathématiques</option>
                    <option value="Structures de données avancées">Structures de données avancées</option>
                    <option value="Anglais">Anglais</option>
                    <option value="Réseaux">Réseaux</option>
                    <option value="Base de Données">Base de Données</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="heure">Heure</label>
                <select id="heure" required>
                    <option value="">Sélectionnez une heure</option>
                    <option value="8h-9h">8h-9h</option>
                    <option value="9h-10h">9h-10h</option>
                    <option value="10h-11h">10h-11h</option>
                    <option value="11h-12h">11h-12h</option>
                    <option value="14h-15h">14h-15h</option>
                    <option value="15h-16h">15h-16h</option>
                    <option value="16h-17h">16h-17h</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salle">Salle</label>
                <select id="salle" required>
                    <option value="">Sélectionnez une salle</option>
                    <option value="Salle 101">Salle 101</option>
                    <option value="Salle 102">Salle 102</option>
                    <option value="Salle 201">Salle 201</option>
                    <option value="Salle 202">Salle 202</option>
                </select>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</section>