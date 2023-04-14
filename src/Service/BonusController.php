<?php

namespace POO_PHP\Bank\Service;

use POO_PHP\Bank\Model\Employee\Employee;

class BonusController
{
    private $totalBonus;

    public function addBonus(Employee $employee)
    {
        $this->totalBonus += $employee->calcBonus();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }
}
