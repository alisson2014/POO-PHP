<?php

use POO_PHP\Bank\Model\Account\CheckingAccount;
use POO_PHP\Bank\Model\Account\Client;
use POO_PHP\Bank\Model\Adress;

require_once "autoload.php";

$adress = new Adress("Campo grande", "Palmares", "Rua C. Índio Bandeira", "15a");
$client = new Client("João inácio", "115.466.811-12", $adress);
$account = new CheckingAccount($client);
