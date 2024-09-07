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
    // Essai d'envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        // Redirection vers success.html si l'envoi a réussi
        header('Location: success.html');
        exit(); // Arrête l'exécution du script après la redirection
    } else {
        // En cas d'erreur d'envoi, affiche un message et redirige vers index1.4.html
        echo "<script>alert('Une erreur est survenue lors de l\'envoi du message.');</script>";
        header('Location: index1.4.html');
        exit(); // Arrête l'exécution du script après la redirection
    }
} else {
    // Si l'accès au script est direct (sans soumission du formulaire), redirige vers la page d'accueil
    header('Location: index1.4.html');
    exit();
}
?>
?>
