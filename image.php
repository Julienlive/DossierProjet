<?php
session_start();

// Définir le type de contenu comme image PNG
header('Content-Type: image/png');

// Dimensions de l'image
$largeur = 100;
$hauteur = 40;
$lignes = 10;

// Caractères utilisés pour le code CAPTCHA
$caracteres = "ABCDEF123456789";

// Créer une image avec fond blanc
$image = imagecreatetruecolor($largeur, $hauteur);
$blanc = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, $largeur, $hauteur, $blanc);

// Fonction pour convertir une couleur hexadécimale en RGB
function hexargb($hex) {
    return [
        'r' => hexdec(substr($hex, 0, 2)),
        'g' => hexdec(substr($hex, 2, 2)),
        'b' => hexdec(substr($hex, 4, 2))
    ];
}

// Ajouter des lignes colorées pour compliquer le fond du CAPTCHA
for ($i = 0; $i < $lignes; $i++) {
    $rgb = hexargb(substr(str_shuffle("ABCDEF0123456789"), 0, 6));
    imageline(
        $image,
        rand(0, $largeur),
        rand(0, $hauteur),
        rand(0, $largeur),
        rand(0, $hauteur),
        imagecolorallocate($image, $rgb['r'], $rgb['g'], $rgb['b'])
    );
}

// Générer le code CAPTCHA
$code_session = substr(str_shuffle($caracteres), 0, 4);
$_SESSION['captcha_code'] = $code_session; // Assurez-vous que la clé de session correspond à celle utilisée pour la validation

// Ajouter le code à l'image
$noir = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 10, 10, $code_session, $noir); // Utiliser $code_session directement sans espacement

// Afficher l'image et détruire pour libérer la mémoire
imagepng($image);
imagedestroy($image);
?>
