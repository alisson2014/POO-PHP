<?php

namespace POO_PHP\Bank\Model;

use Exception;

class People
{
    protected string $name;
    private string $cpf;

    public function __construct(
        string $name,
        string $cpf
    ) {
        $constructValidate = $this->validateName($name) && $this->validateCpf($cpf);
        if (!$constructValidate) {
            throw new Exception("Erro, nome deve ter 5 ou mais caracteres.");
        }

        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    protected function validateName(string $name): bool
    {
        if (mb_strlen($name) <= 3) {
            return false;
        }

        return true;
    }

    protected function validateCpf(string $cpf): bool
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
            return false;
        }

        return true;
    }
}
