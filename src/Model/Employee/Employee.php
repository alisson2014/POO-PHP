<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\People;
use Exception;

//Funcionário
abstract class Employee extends People
{
    private string $office;
    private float $wage;

    public function __construct(
        string $nameEmployee,
        string $cpfEmployee,
        string $office,
        float $wage
    ) {
        parent::__construct($nameEmployee, $cpfEmployee);
        $this->office = $office;
        $this->wage = $wage;
    }

    public function getOffice(): string
    {
        return $this->office;
    }

    public function getWage(): float
    {
        return $this->wage;
    }

    public function calcBonus(): float
    {
        return $this->wage * 0.1;
    }

    public function setOffice(string $newOffice): string
    {
        $this->office = $newOffice;
        return "Cargo alterado para $newOffice";
    }

    public function setName(string $newName): void
    {
        if ($this->validateName($newName)) {
            $this->name = $newName;
        }
    }

    public function getsARise(float $riseValue): void
    {
        if ($riseValue < 0) {
            throw new Exception("Aumento deve ser positivo");
        }

        $this->wage += $riseValue;
    }
}