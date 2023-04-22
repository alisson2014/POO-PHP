<?php

namespace POO_PHP\Bank\Model;

use InvalidArgumentException;

/**
 * class People
 * @package POO_PHP\Bank\Model
 * @property string $name
 * @property-read string $cpf
 */

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
            throw new InvalidArgumentException("Erro, nome e cpf inválidos!");
        } else if (!$nameValidator) {
            throw new InvalidArgumentException("Erro, nome inválido!");
        } else if (!$cpfValidator) {
            throw new InvalidArgumentException("Erro, cpf inválido!");
        }

        $this->name = $name;
        $this->cpf = $cpf;
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function getCpf(): string
    {
        return $this->cpf;
    }

    final protected function validateName(string $name): bool
    {
        if (strlen($name) > 5) {
            return true;
        }

        return false;
    }

    final protected function validateCpf(string $cpf): bool
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
