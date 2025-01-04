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
$data = yaml_parse_file("../data/formation.yaml");


echo "<nav class='left'>";
echo "<a href='../index.php'>Accueil</a>";
echo "</nav>";

foreach($data["diplome"] as $undiplome){
  echo "<h1>".$undiplome["filiere"]."</h1>";
  echo "<p>".$undiplome["option"]."</p>";
  echo "<p>".$undiplome["formation"]."</p>";
  echo "<p>".$undiplome["etablissement"]."</p>";
  echo "<p>".$undiplome["adresse"]."</p>";
  echo "<p>".$undiplome["date debut"].  $undiplome["date fin"]."</p>";
  echo "<p>".$undiplome["contenu"]."</p>";


}





?>
<nav class='center'>
<a href="./../data/cv.png" target="_blank">Visualiser le CV ici</a>
</nav>
</body>
</html>
