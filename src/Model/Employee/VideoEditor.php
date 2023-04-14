<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\Employee\Employee;

class VideoEditor extends Employee
{
    public function calcBonus(): float
    {
        return 600;
    }

    public function setOffice(): string
    {
        return "Editor de vídeo";
    }
}
