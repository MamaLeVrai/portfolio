<?php
session_start();

// Générer une chaîne aléatoire
$characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789'; // Pas de caractères ambigus (O, 0, I, l)
$captchaText = '';
for ($i = 0; $i < 6; $i++) {
    $captchaText .= $characters[rand(0, strlen($characters) - 1)];
}

// Stocker le texte dans une session
$_SESSION['captcha'] = $captchaText;

// Créer une image
$width = 150;
$height = 50;
$image = imagecreatetruecolor($width, $height);

// Couleurs
$backgroundColor = imagecolorallocate($image, 220, 220, 220);
$textColor = imagecolorallocate($image, 0, 0, 0);
$lineColor = imagecolorallocate($image, 64, 64, 64);

// Remplir le fond
imagefilledrectangle($image, 0, 0, $width, $height, $backgroundColor);

// Ajouter du bruit (lignes)
for ($i = 0; $i < 5; $i++) {
    imageline($image, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $lineColor);
}

// Ajouter le texte
$font = __DIR__ . '/arial.ttf'; // Assurez-vous d'avoir une police TTF (exemple : arial.ttf)
imagettftext($image, 20, rand(-10, 10), 20, 35, $textColor, $font, $captchaText);

// Définir le type d'image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
