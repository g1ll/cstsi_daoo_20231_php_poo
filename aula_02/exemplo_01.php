<?php 
include "autoload_namespaces.php";

use classes\Atleta;

$atleta = new Atleta("Luizito Soares", 1.75,75,35);

echo "Dados do Objeto:\n".$atleta;