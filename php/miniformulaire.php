<section>
        <fieldset class="reservation-container">
            <h1>Formulaire de contact</h1>
            <form id="contactForm" method="POST" action="form.php">
                <div class="form-group" id="radio">
                    <label>Genre</label>
                        <label for="male">HOMME</label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="female">FEMME</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="autre">AUTRES</label>
                        <input type="radio" id="autre" name="gender" value="autre">
                </div>

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="contact_date">Date de contact</label>
                    <input type="date" id="contact_date" name="contact_date" required>
                </div>

                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <select id="subject" name="subject" required>
                        <option value="">Sélectionnez un sujet</option>
                        <option value="general">Général</option>
                        <option value="partnership">Partenariat</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit">Envoyer</button>
            </form>
        </fieldset>
    </section>