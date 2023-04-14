<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Employee\Employee;

class Manager extends Employee
{
    public function calcBonus(): float
    {
        return $this->getWage();
    }
}
