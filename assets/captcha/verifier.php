<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userCaptcha = $_POST['captcha'];

    if (!empty($userCaptcha) && $userCaptcha === $_SESSION['captcha']) {
        echo "CAPTCHA correct. Accès autorisé.";
    } else {
        echo "CAPTCHA incorrect. Réessayez.";
    }
}
?>
