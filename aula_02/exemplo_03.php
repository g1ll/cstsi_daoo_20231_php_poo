<?php 
include "autoload_namespaces.php";

use classes\Atleta;
use classes\Medico;
use classes\log\Relatorio;

$atleta = new Atleta("Luizito Soares", 1.75,75,35);
$medico = new Medico("Paulo Paixão",3321,"Fisiologista");

$relatorio = new Relatorio;
$relatorio->add($atleta);
$relatorio->add($medico);
$relatorio->imprime();