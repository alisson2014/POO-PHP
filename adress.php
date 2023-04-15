<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Adress;

$adress = new Adress("São paulo", "Butânta", "Rua joão garcia", "122");

//Mostra todos os campos
echo $adress . PHP_EOL;
//Mostra um a um
echo $adress->city . PHP_EOL;
echo $adress->neighborhood . PHP_EOL;
//Chama o setter do campo
$adress->city = "Rio de janeiro";
$adress->neighborhood = "Tijuca";
//Mostra todos os campos alterados
echo $adress . PHP_EOL;
