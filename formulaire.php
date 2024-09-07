<!-- formulaire.php -->
<form action="contact.php" method="post">
    <div class="form-group">
        <label for="captcha">Veuillez entrer le code CAPTCHA :</label>
        <input type="text" name="captcha" id="captcha" required>
    </div>
    <div class="form-group">
        <!-- Affichage de l'image CAPTCHA -->
        <img src="image.php" onclick="this.src='image.php?' + Math.random();" alt="captcha" style="cursor:pointer;">
    </div>
    <button type="submit">Soumettre</button>
</form>
