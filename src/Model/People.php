<?php

namespace POO_PHP\Bank\Model;

use Exception;

abstract class People
{
    protected string $name;
    protected readonly string $cpf;

    public function __construct(
        string $name,
        string $cpf
    ) {
        $nameValidator = $this->validateName($name);
        $cpfValidator = $this->validateCpf($cpf);

        if (!$nameValidator && !$cpfValidator) {
            throw new Exception("Erro, nome e cpf inválidos!");
        } else if (!$nameValidator) {
            throw new Exception("Erro, nome inválido!");
        } else if (!$cpfValidator) {
            throw new Exception("Erro, cpf inválido!");
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
        if (strlen($name) > 5) {
            return true;
        }

        return false;
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