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
$data = yaml_parse_file("../data/contact.yaml");



echo "<nav class='left'>";
echo "<a href='../index.php'>Accueil</a>";
echo "</nav>";

echo "<h1> Page de contact </h1>";





?>

</body>
</html>
