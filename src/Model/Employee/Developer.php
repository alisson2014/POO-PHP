<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Employee\Employee;

class Developer extends Employee
{
    public function levelUp(): void
    {
        $this->getsARise($this->getWage() * 0.75);
    }
}
