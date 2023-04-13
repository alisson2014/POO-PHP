<?php

namespace POO_PHP\Bank\Model\Account;

use POO_PHP\Bank\Model\Account\Account;

//Conta poupança
class SavingsAccount extends Account
{
    public function getRate(): float
    {
        return 0.03;
    }
}
