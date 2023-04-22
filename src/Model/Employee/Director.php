<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Authentication;
use POO_PHP\Bank\Model\Employee\Employee;


/**
 * class Director
 * @package POO_PHP\Bank\Model\Employee
 */
class Director extends Employee implements Authentication
{
    public function calcBonus(): float
    {
        return $this->getWage() * 2;
    }

    public function authentication(string $password): bool
    {
        return $password = "1234";
    }

    public function setOffice(): string
    {
        return "Diretor";
    }

    public function authenticate(string $password): bool
    {
        return $password === "1234";
    }
}
