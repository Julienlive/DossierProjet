<?php
if (isset($_GET['error'])): ?>
    <div class="alert alert-danger d-flex align-items-center">
        <img src="https://cdn-icons-png.flaticon.com/512/833/833314.png" alt="Erreur" class="mr-2" style="width: 24px; height: 24px;">
        <span>
            <?php
            if ($_GET['error'] == 'captcha') {
                echo "Le code CAPTCHA que vous avez entré est incorrect. Veuillez réessayer.";
            } elseif ($_GET['error'] == 'email') {
                echo "Il y a eu une erreur lors de l'envoi de votre e-mail. Veuillez réessayer plus tard.";
            }
            ?>
        </span>
    </div>
<?php endif; ?>

