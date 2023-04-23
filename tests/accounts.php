<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Account\{CheckingAccount, Client, InsufficientAmountException};
use POO_PHP\Bank\Model\Adress;

$adress = new Adress("Campo grande", "Palmares", "Rua C. Índio Bandeira", "15a");
$client = new Client("João", "115.465.445-46", $adress);
$account = new CheckingAccount($client);

echo $account->deposit(500) . PHP_EOL;

//Tratando erros
try {
    echo $account->withdraw(600) . PHP_EOL;
} catch (InsufficientAmountException $e) {
    echo "Saldo insulficiente" . PHP_EOL;
}

echo $client->name;
