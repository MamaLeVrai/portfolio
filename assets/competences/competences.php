<?php
require_once("../../yamlBiblio/yaml.php");

$data=yaml_parse_file('competences.yaml');

echo "<h2>competences</h2>\n";
echo "<p>".ucfirst($data["prenom"])." : ".$data["nom"]." : ".$data["accroche"]." : ".$data["paragraphe de presentation"]." : ".$data["photo d'illustration"]. "</p>\n";
?>