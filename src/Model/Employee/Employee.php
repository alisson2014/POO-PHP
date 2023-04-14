<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\People;
use Exception;

//Funcionário
abstract class Employee extends People
{
    protected string $office;
    private float $wage;

    public function __construct(
        string $nameEmployee,
        string $cpfEmployee,
        float $wage
    ) {
        parent::__construct($nameEmployee, $cpfEmployee);
        $this->wage = $wage;
        $this->office = $this->setOffice();
    }

    public function getOffice(): string
    {
        return $this->office;
    }

    public function getWage(): float
    {
        return $this->wage;
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
    abstract protected function setOffice(): string;
    abstract public function calcBonus(): float;
}
