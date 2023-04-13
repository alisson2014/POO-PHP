<?php

namespace POO_PHP\Bank\Model\Account;

use POO_PHP\Bank\Model\Account\Account;

//Conta corrente
class CheckingAccount extends Account
{
    public function getRate(): float
    {
        return 0.05;
    }

    public function transfer(float $amount, Account $destiny): string
    {
        if ($amount > $this->getBalance()) {
            return "Saldo insuficiente";
        }

        $this->withdraw($amount);
        $destiny->deposit($amount);
        return "R$ {$amount} transferido com sucesso!";
    }
}
