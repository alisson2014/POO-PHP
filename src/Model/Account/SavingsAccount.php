<?php

namespace POO_PHP\Bank\Model\Account;

use POO_PHP\Bank\Model\Account\Account;


/**
 * class SavingsAccount
 * @package POO_PHP\Bank\Model\Account
 */
class SavingsAccount extends Account
{
    public function getRate(): float
    {
        return 0.03;
    }
}
