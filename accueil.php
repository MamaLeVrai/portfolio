<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('accueil.yaml');

echo "<h2>Durée</h2>\n";
echo "<p>".ucfirst($data["prenom"])." : ".$data["nom"]." : ".$data["accroche"]." : ".$data["paragraphe de presentation"]." : ".$data["photo d'illustration"]. "</p>\n";

