<?php 
include 'autoload_namespaces.php';

use classes\Paciente as IMC;

$pa1 = new IMC("Luizito",36,1.8,80);

$pa1->calcImc();
$pa1->showImc();