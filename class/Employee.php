<?php

require_once "People.php";

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

    private function setOffice(string $newOffice): string
    {
        $this->office = $newOffice;
        return "Cargo alterado para $newOffice";
    }

    private function setName(string $newName): void
    {
        if ($this->validateName($newName)) {
            $this->name = $newName;
        }
    }
}
