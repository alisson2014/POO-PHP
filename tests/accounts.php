<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Account\{CheckingAccount, Client};
use POO_PHP\Bank\Model\Adress;

$adress = new Adress("Campo grande", "Palmares", "Rua C. Índio Bandeira", "15a");
$client = new Client("João inácio", "115.466.811-12", $adress);
$account = new CheckingAccount($client);
