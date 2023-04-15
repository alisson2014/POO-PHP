<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\AccessProperties;
use POO_PHP\Bank\Model\Employee\Employee;

//TODO: desenvolvedor é um funcionário
class Developer extends Employee
{
    use AccessProperties;
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
