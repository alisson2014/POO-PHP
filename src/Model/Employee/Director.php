<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Employee\Employee;

class Director extends Employee
{
    public function calcBonus(): float
    {
        return $this->getWage() * 2;
    }

    public function authentication(string $password): bool
    {
        return $password = "1234";
    }
}
