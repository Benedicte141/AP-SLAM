<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('data/competences.yaml');
//print_array($data);

echo "<h1>Compétences</h1>\n";

foreach($data as $domaine){
    echo "<p>".$domaine["domaine"]."</p>";
    echo "<ul>";
    foreach($domaine["competences"] as $competence){
        echo "<li>".$competence["nom"]." : ".$competence["niveau"]."</li>";
    }
    echo "</ul>";
}
