<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mes compétences</title>
    <link href="../assets/stylesheet.css" rel="stylesheet" />
  </head>
  <body>
   
  <?php
  require_once("../yaml/yaml.php");

  // Données YAML
  $data = yaml_parse_file("/competences.yaml");

  // Affichage de la navigation
  echo "<nav class='left'>";
  echo "<a href='../index.php'>Accueil</a>";
  echo "</nav>";

  // Affichage des domaines et compétences
  foreach ($data['domaine'] as $domaine_name => $competences) {
      echo "<h1>" . htmlspecialchars(ucfirst($domaine_name)) . "</h1>";
      echo "<ul>";
      foreach ($competences as $competence) {
          $niveau = intval($competence['niveau']);
          echo "<li>";
          echo htmlspecialchars($competence['nom'])." " ;
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
  }
  ?>

  </body>
</html>