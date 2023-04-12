<?php

class Account
{
    private Client $client;
    private float $balance = 0;
    private static int $totalAccounts = 0;

    public function __construct(
        Client $client
    ) {
        $this->client = $client;
        self::$totalAccounts++;
    }

    public function __destruct()
    {
        self::$totalAccounts--;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $amount): string
    {
        if ($amount > $this->balance) {
            return "Saldo insuficiente!";
        }

        $newBalance = $this->balance - $amount;
        $this->balance -= $amount;
        return "Saque realizado com sucesso" . PHP_EOL . "Novo saldo $newBalance";
    }

    public function deposit(float $amount): string
    {
        if ($amount < 0) {
            return "Valor deve ser positivo";
        }

        $this->balance += $amount;
        return "Deposito realizado com sucesso";
    }

    public function transfer(float $amount, Account $destiny): string
    {
        if ($amount > $this->balance) {
            return "Saldo insuficiente";
        }

        $this->withdraw($amount);
        $destiny->deposit($amount);
        return "R$ {$amount} transferido com sucesso!";
    }


    public static function getTotalAccounts(): int
    {
        return self::$totalAccounts;
    }
}
