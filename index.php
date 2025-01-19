<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Portfolio Marius MARGUERAY</title>
    <link href="css/stylesheet.css" rel="stylesheet" />
  </head>
  <body>
    
  <div id="accueil"></div>
  <?php
// ACCUEIL
require_once("yamlBiblio/yaml.php");
$data = yaml_parse_file("assets/accueil/accueil.yaml");

echo "<h1> Bienvenue sur le portfolio de ".$data["prenom"]." ".$data["nom"]." !"."</h1>";
?>

<nav class="menu">
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="menu-items">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#competences">Mes compétences</a></li>
        <li><a href="#formation">Ma formation</a></li>
        <li><a href="#realisations">Mes réalisations</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>


<div id='presentation'></div>
<?php
// Charger les données de présentation depuis le fichier YAML
require_once("./yamlBiblio/yaml.php");
$data = yaml_parse_file("assets/accueil/accueil.yaml");
?>

<!-- Boîte de présentation -->
<div id="presentation" class="presentation-box">
    <h1>Présentation</h1>
    <div class="presentation-content">
        <div class="presentation-text">
            <p>Je m'appelle <?php echo htmlspecialchars($data["prenom"]) . " " . htmlspecialchars($data["nom"]); ?>,</p>
            <p><?php echo nl2br(htmlspecialchars($data["paragraphe"])); ?></p>
            <p>Ma phrase préférée : <?php echo htmlspecialchars($data["accroche"]); ?></p>
        </div>
        <div class="presentation-image">
            <img src="./image/photo.jpg" alt="Photo de <?php echo htmlspecialchars($data["prenom"]) . " " . htmlspecialchars($data["nom"]); ?>" />
        </div>
    </div>
</div>
<div id='competences'></div>
<?php
// COMPETENCES
require_once("./yamlBiblio/yaml.php");
$data = yaml_parse_file("assets/competences/competences.yaml");
echo "<h1>Mes Compétences</h1>";

// Container principal pour les boîtes
echo "<div class='competences-container'>";

// Initialisation d'un compteur pour gérer les colonnes
$counter = 0;

// Ouverture de la première boîte
echo "<div class='competences-box'>";
?>

<?php
foreach ($data['domaine'] as $domaine_name => $competences) {
    echo "<h2>" . htmlspecialchars(ucfirst($domaine_name)) . "</h2>";
    echo "<ul>";
    foreach ($competences as $competence) {
        $niveau = intval($competence['niveau']); // Niveau en entier
        echo "<li>";
        echo htmlspecialchars($competence['nom'])." ";
        echo "<span class='stars'>";

        // Générer des étoiles pleines
        for ($i = 1; $i <= $niveau; $i++) {
            echo "<span class='star'>&#9733;</span>"; // Étoile pleine
        }

        // Compléter avec des étoiles vides
        for ($i = $niveau + 1; $i <= 5; $i++) {
            echo "<span class='star star-empty'>&#9734;</span>"; // Étoile vide
        }

        echo "</span>";
        echo "</li>";
    }
    echo "</ul>";

    $counter++;
    // Fermer la boîte actuelle et en ouvrir une nouvelle après 3 domaines
    if ($counter % 3 == 0) {
        echo "</div><div class='competences-box'>";
    }
}

// Fermer la dernière boîte
echo "</div>";

echo "</div>"; // Fermeture du container principal
?>
<div id='formation'></div>
<?php  //FORMATION

require_once("./yamlBiblio/yaml.php");
    $data = yaml_parse_file("assets/formation/formation.yaml");

    echo "<h1>Ma Formation</h1>";
    echo "<div class='formation-container'>";

    foreach ($data["diplome"] as $formation) {
        
        // Vérifiez si toutes les informations nécessaires sont présentes
        if (!empty($formation["filiere"]) && !empty($formation["etablissement"])) {
            echo "<div class='formation-box'>";
            echo "<h2>" . htmlspecialchars($formation["filiere"]) . "</h2>";
            echo "<p><strong>Option :</strong> " . htmlspecialchars($formation["option"]) . "</p>";
            echo "<p><strong>Établissement :</strong> " . htmlspecialchars($formation["etablissement"]) . "</p>";
            echo "<p><strong>Période :</strong> " . htmlspecialchars($formation["date debut"]) . " - " . htmlspecialchars($formation["date fin"]) . "</p>";
            echo "<p>" . htmlspecialchars($formation["contenu"]) . "</p>";
            echo "</div>";
        }
    }
    echo "<a href='./image/cv.png'>Télecharger mon CV</a>";
    echo "</div>";

//REALISATIONS
?>
<div id="realisations"></div>
<?php
require_once("./yamlBiblio/yaml.php");
$data = yaml_parse_file("assets/realisations/realisations.yaml");

echo "<h1>Mes réalisations</h1>";

// Conteneur principal pour les boîtes de réalisations
echo "<div class='realisation-container'>";

// Parcours des réalisations à partir du fichier YAML
foreach ($data['realisations'] as $realisation) {
    // Vérifie si les informations de la réalisation sont présentes
    if (!empty($realisation["titre"]) && !empty($realisation["description"]) && !empty($realisation["image"]) && !empty($realisation["lien"])) {
        echo "<div class='realisation-box'>";
        echo "<h2>" . htmlspecialchars($realisation["titre"]) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($realisation["description"])) . "</p>";
        echo "<a href='" . htmlspecialchars($realisation["lien"]) . "' target='_blank'>";
        echo "<img class='realisation-image' src='" . htmlspecialchars($realisation["image"]) . "' alt='" . htmlspecialchars($realisation["titre"]) . "'>";
        echo "</a>";
        echo "</div>";
    }
}

echo "</div>"; // Fermeture du conteneur principal
?>


<!-- FOOTER -->
<footer>
    <div class="footer-content">
        <a href="https://github.com/MamaLeVrai" target="_blank"><img class="liens" src="./image/github.png" alt="GitHub"></a>
        <a href="https://www.instagram.com/ma_ma_du_14/" target="_blank"><img class="liens" src="./image/instagram.webp" alt="Instagram"></a>
        <a href="https://www.linkedin.com/in/marius-margueray-1024a82b6/" target="_blank"><img class="liens" src="./image/linkedin_black.png" alt="linkedin"></a>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 MARGUERAY Marius. Tous droits réservés.</p>
    </div>
</footer>


</body>
</html>
