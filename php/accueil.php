<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('data/accueil.yaml');
//print_array($data);

echo "<h1>".$data["titre"]."</h1>\n";

echo "<p>".ucfirst($data["nom"])."</p>\n";

echo "<h4>".ucfirst($data["accroche"])."</h4>\n";




