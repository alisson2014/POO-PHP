<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\{Adress, Employee};
use POO_PHP\Bank\Model\Account\{Client, CheckingAccount};
use POO_PHP\Bank\Service\BonusController;

//Accounts
$address1 = new Adress("Campo Mourão", "Jd Araucaria", "R São José", "466");
$client1 = new Client("Mizuno", "116.711.466-88", $address1);

$account = new CheckingAccount($client1);

//Employes
$umFuncionario = new Employee(
    "Vinicius Dias",
    "123.456.789-10",
    "Desenvolvedor",
    1000
);

$umaFuncionaria = new Employee(
    "Patricia",
    "987.654.321-10",
    "Gerente",
    3000
);


$controlador = new BonusController();
$controlador->addBonus($umFuncionario);
$controlador->addBonus($umaFuncionaria);

echo $controlador->getTotalBonus();
