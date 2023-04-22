<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Authentication;
use POO_PHP\Bank\Model\Employee\Employee;

/**
 * class Manager
 * @package POO_PHP\Bank\Model\Employee
 */
class Manager extends Employee implements Authentication
{
    public function calcBonus(): float
    {
        return $this->getWage();
    }

    public function setOffice(): string
    {
        return "Gerente";
    }

    public function authenticate(string $password): bool
    {
        return $password = "4321";
    }
}
