<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('data/experiences.yaml');
//print_array($data);

echo "<h1>Expériences</h1>\n";

foreach($data as $employeur){
    echo "<h3>".$employeur["employeur"]."</h3>\n";
    echo "<ul>";
    foreach($employeur["competence"] as $competences){
        echo "<li>".$competences["nom"]." : ".$competences["description"]." : ".$competences["description"]."</li>";
    }
    echo "</ul>";
}