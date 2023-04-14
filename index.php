<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Adress;
use POO_PHP\Bank\Model\Account\Client;
use POO_PHP\Bank\Model\Account\CheckingAccount;
use POO_PHP\Bank\Model\Employee;

$address1 = new Adress("Campo Mourão", "Jd Araucaria", "R São José", "466");
$client1 = new Client("Mizuno", "116.711.466-88", $address1);

$account = new CheckingAccount($client1);

echo var_dump($account->getClient()) . PHP_EOL;
