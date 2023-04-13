<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Adress;
use POO_PHP\Bank\Model\Account\Client;
use POO_PHP\Bank\Model\Account\CheckingAccount;

$address1 = new Adress("Campo Mourão", "Jd Araucaria", "R São José", "466");
$client1 = new Client("Irineu", "116.199.466-16", $address1);
$account1 = new CheckingAccount($client1);

$client2 = new Client("João", "113.466.789-15", $address1);
$account2 = new CheckingAccount($client2);

echo $account1->deposit(15000) . PHP_EOL;
echo $account1->withdraw(100) . PHP_EOL;
