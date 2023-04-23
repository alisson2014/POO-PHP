<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Employee\Employee;


/**
 * class Developer
 * @package POO_PHP\Bank\Model\Employee
 * @method void levelUp()
 */
class Developer extends Employee
{
    public function levelUp(): void
    {
        $this->getsARise($this->getWage() * 0.75);
    }

    public function calcBonus(): float
    {
        return 500.00;
    }

    public function setOffice(): string
    {
        return "Desenvolvedor";
    }
}
