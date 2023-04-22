<?php

namespace POO_PHP\Bank\Service;

use POO_PHP\Bank\Model\Employee\Employee;

/**
 * class BonusController
 * @property float $totalBonus
 * @method void addBonus(Employee $employee)
 */
class BonusController
{
    private float $totalBonus;

    public function addBonus(Employee $employee): void
    {
        $this->totalBonus += $employee->calcBonus();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }
}
