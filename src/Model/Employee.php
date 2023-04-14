<?php

namespace POO_PHP\Bank\Model;

use POO_PHP\Bank\Model\People;

//Funcionário
class Employee extends People
{
    private string $office;

    public function __construct(
        string $nameEmployee,
        string $cpfEmployee,
        string $office
    ) {
        parent::__construct($nameEmployee, $cpfEmployee);
        $this->office = $office;
    }

    public function getOffice(): string
    {
        return $this->office;
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
}
