<?php

require_once "class/Account.php";
require_once "class/Adress.php";
require_once "class/Client.php";

$endereco = new Adress("campo mourao", "jd albuquerque", "joag", "455");
$conta = new Client("Joao mou", "119.798.466-10", $endereco);

echo var_dump($conta);
