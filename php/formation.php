<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('data/formation.yaml');
//print_array($data);

echo "<h1>Formation</h1>\n";

foreach($data as $formation){
    echo "<h3>".$formation["formation"]."</h3>\n";
    echo "<ul>";
    foreach($formation["etablissement"] as $etablissements){
        echo "<li>".$etablissements["nom"]." : </li>".$etablissements["date"]." : ".$etablissements["lieu"]." => ".$etablissements["contenu"]."</li>";
    }
    echo "</ul>";
}