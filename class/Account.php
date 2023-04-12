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
        $balance = $this->balance;
        if ($amount > $balance) {
            return "Saldo insuficiente!" . PHP_EOL . "Seu saldo: $balance";
        }

        $newBalance = $balance - $amount;
        $this->balance -= $amount;
        return "Saque realizado com sucesso, novo saldo: $newBalance";
    }

    public function deposit(float $amount): string
    {
        $balance = $this->balance;
        if ($amount < 0) {
            return "Valor deve ser positivo!";
        }

        $newBalance = $balance + $amount;
        $this->balance += $amount;
        return "Deposito realizado com sucesso" . PHP_EOL . "Novo saldo: $newBalance";
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
