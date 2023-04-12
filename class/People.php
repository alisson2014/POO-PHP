<?php

class People
{
    protected string $nameAccount;
    private string $cpfAccount;

    public function __construct(
        string $nameAccount,
        string $cpfAccount
    ) {
        $constructValidate = $this->validateName($nameAccount) && $this->validateCpf($cpfAccount);
        if (!$constructValidate) {
            throw new Exception("Erro, nome deve ter 5 ou mais caracteres.");
        }

        $this->nameAccount = $nameAccount;
        $this->cpfAccount = $cpfAccount;
    }

    public function getName(): string
    {
        return $this->nameAccount;
    }

    public function getCpf(): string
    {
        return $this->cpfAccount;
    }

    protected function validateName(string $nameAccount): bool
    {
        if (mb_strlen($nameAccount) < 5) {
            return false;
        }

        return true;
    }

    protected function validateCpf(string $cpfAccount): bool
    {
        $cpfAccount = filter_var($cpfAccount, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpfAccount === false) {
            return false;
        }

        return true;
    }
}
