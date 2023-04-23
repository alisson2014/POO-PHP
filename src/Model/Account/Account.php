<?php

namespace POO_PHP\Bank\Model\Account;

use InvalidArgumentException;
use POO_PHP\Bank\Model\Account\Client;
use POO_PHP\Bank\Model\Traits\{AccessProperties, SetProperties};

/**
 * class Account
 * @package POO_PHP\Bank\Model\Account
 * @property float $balance
 * @property int $totalAccounts
 * @method string withdraw(float $amount)
 * @method string deposit(float $amount)
 * @static int getTotalAccounts()
 * @abstract float getRate()
 */
abstract class Account
{
    use AccessProperties;
    use SetProperties;
    protected readonly Client $client;
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

    protected function getClient(): Client
    {
        return $this->client;
    }

    protected function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $amount): string
    {
        $withdrawAmount = $amount * (1 + $this->getRate());
        if ($withdrawAmount > $this->getBalance()) {
            throw new InsufficientAmountException(
                $withdrawAmount,
                $this->getBalance()
            );
        }

        $newBalance = $this->balance - $withdrawAmount;
        $this->balance -= $withdrawAmount;
        return "Saque realizado com sucesso, novo saldo: $newBalance";
    }

    public function deposit(float $amount): string
    {
        $balance = $this->balance;
        if ($amount < 0) {
            throw new InvalidArgumentException("Valor deve ser positivo");
        }

        $newBalance = $balance + $amount;
        $this->balance += $amount;
        return "Deposito realizado com sucesso" . PHP_EOL . "Novo saldo: $newBalance";
    }

    public static function getTotalAccounts(): int
    {
        return self::$totalAccounts;
    }

    abstract protected function getRate(): float;
}
