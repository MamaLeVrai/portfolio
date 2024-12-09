<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire CAPTCHA</title>
</head>
<body>
    <form action="verifier.php" method="post">
        <p>
            <img src="captcha.php" alt="CAPTCHA">
        </p>
        <p>
            <label for="captcha">Recopiez le texte :</label>
            <input type="text" id="captcha" name="captcha" required>
        </p>
        <button type="submit">Vérifier</button>
    </form>
</body>
</html>
