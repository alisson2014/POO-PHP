<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Employee\{Developer, Director, Manager, VideoEditor};
use POO_PHP\Bank\Service\Authenticator;

$authenticator = new Authenticator();
//Employees 
$director = new Director("Wagner", "122.466.187-05", 39000);
$manager = new Manager("André Cabral", "166.455.122-15", 14000);
$developer = new Developer("Matheus", "116.455.711-10", 8000);
$editor = new VideoEditor("João Passos", "112.466.123-16", 1000);

//Array com os funcionários
$employees = [$developer, $manager, $director, $editor];

//Mostra as informções do funcionário
echo "-----------Funcionários-----------" . PHP_EOL;
foreach ($employees as  $employee) {
    echo $employee .
        "----------------------------------" . PHP_EOL;
}

echo $authenticator->tryLoggin($director, "1234");
