<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\{AccessProperties, People};
use Exception;

//TODO: funcionário é uma pessoa
abstract class Employee extends People
{
    protected string $office;
    protected float $wage;

    public function __construct(
        string $nameEmployee,
        string $cpfEmployee,
        float $wage
    ) {
        parent::__construct($nameEmployee, $cpfEmployee);
        $this->wage = $wage;
        $this->office = $this->setOffice();
    }

    protected function getOffice(): string
    {
        return $this->office;
    }

    protected function getWage(): float
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
    public function __toString(): string
    {
        return "Nome: {$this->name}" . PHP_EOL .
            "Cargo: {$this->office}" . PHP_EOL .
            "Salário: {$this->wage}" . PHP_EOL;
    }
}
