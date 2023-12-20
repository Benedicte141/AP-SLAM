<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('data/apropos.yaml');
//print_array($data);

echo "<h1>".$data["titre"]."</h1>\n";

echo "<p>".ucfirst($data["accroche"])."</p>\n";

echo "<p>".ucfirst($data["presentation"])."</p>\n";

echo "<p>".ucfirst($data["photo"])."</p>\n";