<?php 
include "autoload_namespaces.php";

use classes\Atleta;
use classes\Medico;

$atleta = new Atleta("Luizito Soares", 1.75,75,35);
$medico = new Medico("Paulo Paixão", 1.85,80,75);

echo "Dados do Jogador:\n".$atleta;
echo "Dados do Médico:\n".$medico;