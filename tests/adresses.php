<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Adress;

$adress = new Adress("São paulo", "Butânta", "Rua joão garcia", "122");

//Mostra todos os campos (método toString())
echo $adress;

//Altera o bairro (método __set())
$adress->neighborhood = "Itaquera";

//Mostra o bairro (método __get())
echo $adress->neighborhood . PHP_EOL;

echo $adress;
