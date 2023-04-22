<?php

namespace POO_PHP\Bank\Model\Account;

use Exception;

/**
 * class InsufficientAmountException
 * @throws Exception
 */
class InsufficientAmountException extends Exception
{
    public function __construct(float $withdrawalValue, float $amount)
    {
        $msg = "Você tentou sacar/enviar $withdrawalValue, mas tem apenas $amount em conta.";
        parent::__construct($msg);
    }
}
