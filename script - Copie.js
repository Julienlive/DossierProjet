<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Configuration de l'e-mail
    $to = 'garnierjulien45@gmail.com';
    $subject = 'Contact Form: ' . $subject;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construction du message
    $emailMessage = "<html><body>";
    $emailMessage .= "<h2>Message de $firstName $lastName</h2>";
    $emailMessage .= "<p><strong>Email:</strong> $email</p>";
    $emailMessage .= "<p><strong>Objet:</strong> $subject</p>";
    $emailMessage .= "<p><strong>Message:</strong><br>$message</p>";
    $emailMessage .= "</body></html>";

    // Envoi de l'e-mail
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "<p>Merci pour votre message. Nous vous contacterons bientôt.</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
