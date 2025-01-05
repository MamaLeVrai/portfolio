<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Présentation</title>
    <link href="../../stylesheet.css" rel="stylesheet" />
  </head>
  <body>
   
  <?php

require_once("../../yaml/yaml.php");
$data = yaml_parse_file("accueil.yaml");

echo "<nav class='left'>";
echo "<a href='../../index.php'>Accueil</a>";
echo "</nav>";


echo "<p> Je m'appelle ".$data["prenom"]." ".$data["nom"].",";


echo "<p>".$data["paragraphe"]."</p>";
echo "<p> Ma phrase préférée : ".$data["accroche"]."</p>";

echo "<img src='./../data/photo.jpg'/>"

?>

</body>
</html>