<?php ?>
<section>
    <div class="reservation-container">
        <h1>Réserver une permanence</h1>
        <form id="reservationForm">
            <div class="form-group">
                <label for="nom">Nom et Prénom</label>
                <input type="text" id="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="classe">Classe</label>
                <select id="classe" required>
                    <option value="">Sélectionnez une classe</option>
                    <option value="6ème">6ème</option>
                    <option value="5ème">5ème</option>
                    <option value="4ème">4ème</option>
                    <option value="3ème">3ème</option>
                    <option value="2nde">2nde</option>
                    <option value="1ère">1ère</option>
                    <option value="Terminale">Terminale</option>
                </select>
            </div>
            <div class="form-group">
                <label for="matiere">Matière</label>
                <select id="matiere" required>
                    <option value="">Sélectionnez une matière</option>
                    <option value="Mathématiques">Mathématiques</option>
                    <option value="Français">Français</option>
                    <option value="Anglais">Anglais</option>
                    <option value="Histoire-Géographie">Histoire-Géographie</option>
                    <option value="Sciences">Sciences</option>
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
            <input type="button" class="submit-btn" value="Réserver">
        </form>
    </div>
</section>