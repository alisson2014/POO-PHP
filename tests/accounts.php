<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Account\{CheckingAccount, Client, InsufficientAmountException};
use POO_PHP\Bank\Model\Account\SavingsAccount;
use POO_PHP\Bank\Model\Adress;

//Endereços
$adress1 = new Adress("Campo grande", "Palmares", "Rua C. Índio Bandeira", "15a");
$adress2 = new Adress("São Paulo", "Tatuapé", "Rua são vicente", "160");

//Clientes
$client1 = new Client("João", "115.465.445-46", $adress1);
$client2 = new Client("Eduarda", "113.466.188-46", $adress2);

//Contas
$account1 = new CheckingAccount($client1);
$account2 = new SavingsAccount($client2);

//Mostra endereço
echo $adress1 . PHP_EOL;

//Muda um valor do endereço
$adress1->city = "Cuiaba";
echo $adress1->city;

//Mostra os dados(var_dump) do cliente
echo var_dump($client1);

//Método de deposito
$account1->deposit(1500);
echo $account1->balance . PHP_EOL;

$account2->deposit(1800);
echo $account2->balance . PHP_EOL;

//Método de saque
$account1->withdraw(100);
echo $account1->balance . PHP_EOL;

$account2->withdraw(600);
echo $account2->balance . PHP_EOL;

//Método de transferência
echo $account1->transfer(1100, $account2) . PHP_EOL;

//Tratando erros (Saldo insulficiente)
try {
    echo $account1->withdraw(600) . PHP_EOL;
} catch (InsufficientAmountException $e) {
    echo "Saldo insulficiente" . PHP_EOL;
} finally {
    echo "Operação finalizada.";
}
