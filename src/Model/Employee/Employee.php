<?php

namespace POO_PHP\Bank\Model\Employee;

use POO_PHP\Bank\Model\{People, AccessProperties, SetProperties};
use InvalidArgumentException;

/**
 * class Employee
 * @package POO_PHP\Bank\Model\Employee
 * @property string $office
 * @property float $wage
 */
abstract class Employee extends People
{
    use AccessProperties;
    use SetProperties;
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

    public function getsARise(float $riseValue): void
    {
        if ($riseValue < 0) {
            throw new InvalidArgumentException("Aumento deve ser positivo");
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
