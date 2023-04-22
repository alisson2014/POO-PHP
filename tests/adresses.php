<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Adress;

$adress = new Adress("São paulo", "Butânta", "Rua joão garcia", "122");

//Mostra todos os campos
echo "Rua: {$adress->road}" . PHP_EOL;
echo "Número: {$adress->number}" . PHP_EOL;
echo "Bairro: {$adress->neighborhood}" . PHP_EOL;
echo "Cidade: {$adress->city}" . PHP_EOL;
