<?php
session_start(); // Démarrer la session pour utiliser les données du CAPTCHA

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification du CAPTCHA
    if (empty($_POST['captcha']) || $_POST['captcha'] !== $_SESSION['captcha_code']) {
		  header("Location: devis.html?error=captcha");
        exit;
		
    }

    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['phone']);
    $typeSite = htmlspecialchars($_POST['siteType']);
    $pages = htmlspecialchars($_POST['pages']);
    $design = htmlspecialchars($_POST['design']);
    $fonctionnalites = isset($_POST['features']) ? implode(', ', $_POST['features']) : 'Aucune fonctionnalité sélectionnée';
    $couleur1 = htmlspecialchars($_POST['color1']);
    $couleur2 = htmlspecialchars($_POST['color2']);
    $couleur3 = htmlspecialchars($_POST['color3']);
    $sujet = htmlspecialchars($_POST['siteTheme']);
    $description = htmlspecialchars($_POST['description']);

    // Vérification et traitement de l'image téléchargée
    $uploadOk = 1;
    $imagePath = "";
    if (isset($_FILES['exampleImage']) && $_FILES['exampleImage']['error'] == 0) {
        $imagePath = "uploads/" . basename($_FILES["exampleImage"]["name"]);
        $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["exampleImage"]["tmp_name"]);

        if ($check !== false) {
            if (move_uploaded_file($_FILES["exampleImage"]["tmp_name"], $imagePath)) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
                echo "Désolé, une erreur est survenue lors du téléchargement de votre fichier.";
                exit;
            }
        } else {
            $uploadOk = 0;
            echo "Le fichier n'est pas une image valide.";
            exit;
        }
    }

    // Préparation de l'e-mail
    $to = "garnierjulien45@gmail.com"; // Adresse e-mail du destinataire
    $subject = "Nouvelle Demande de Devis pour un Site Web";

    // Corps du message HTML
    $message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9; }
            .header { text-align: center; padding-bottom: 10px; border-bottom: 2px solid #ffa500; }
            .header img { width: 100px; }
            .title { font-size: 20px; font-weight: bold; color: #333; }
            .subtitle { font-size: 16px; font-weight: bold; color: #555; }
            .content { margin-top: 20px; }
            .content p { margin: 10px 0; }
            .info { padding: 10px; border: 1px solid #ddd; border-radius: 5px; background-color: #fff; }
            .info h3 { margin-top: 0; }
            .footer { text-align: center; margin-top: 20px; }
            .footer img { width: 20px; }
            .color-box { display: inline-block; width: 100px; height: 30px; border-radius: 5px; text-align: center; line-height: 30px; color: #fff; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <img src='https://cielinteractivelearn.com/Version1.4/images/01.png' alt='Logo du site'>
            </div>
            <div class='content'>
                <p>Bonjour <strong>Monsieur GARNIER Julien</strong>,</p>
                <p>Vous avez reçu une demande de devis de la part de <strong>$nom</strong>. Voici les informations fournies pour la réalisation d'un site web :</p>
                
                <div class='info'>
                    <h3>Informations de Contact</h3>
                    <p><strong>Nom :</strong> $nom</p>
                    <p><strong>Email :</strong> $email</p>
                    <p><strong>Téléphone :</strong> $telephone</p>
                </div>
                
                <div class='info'>
                    <h3>Type de Site Web</h3>
                    <p>$typeSite</p>
                </div>
                
                <div class='info'>
                    <h3>Nombre de Pages Prévues</h3>
                    <p>$pages</p>
                </div>
                
                <div class='info'>
                    <h3>Design</h3>
                    <p>$design</p>
                </div>
                
                <div class='info'>
                    <h3>Fonctionnalités Souhaitées</h3>
                    <p>$fonctionnalites</p>
                </div>
                
                <div class='info'>
                    <h3>Couleurs Choisies</h3>
                    <p><span class='color-box' style='background-color: $couleur1;'>$couleur1</span></p>
                    <p><span class='color-box' style='background-color: $couleur2;'>$couleur2</span></p>
                    <p><span class='color-box' style='background-color: $couleur3;'>$couleur3</span></p>
                </div>
                
                <div class='info'>
                    <h3>Sujet du Site</h3>
                    <p>$sujet</p>
                </div>
                
                <div class='info'>
                    <h3>Description Supplémentaire</h3>
                    <p>$description</p>
                </div>
                
                <div class='footer'>
                    <p>Je vous en prie !</p>
					<p>© 2024 Le Gamer Café - Tous droits réservés</p>
                    <img src='https://cdn-icons-png.flaticon.com/512/9554/9554962.png' alt='Pouce en l’air'>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@votresite.com" . "\r\n"; // Adresse e-mail de l'expéditeur

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Redirection vers la page de succès
        header("Location: success.html");
        exit;
    } else {
       
		// Redirection en cas d'erreur
        header("Location: devis.html?error=email");
        exit;
    }
}
?>
