<?php

namespace POO_PHP\Bank\Model\Account;

use POO_PHP\Bank\Model\Authentication;
use POO_PHP\Bank\Model\{People, Adress};

/**
 * class Client
 * @package POO_PHP\Bank\Model\Account
 * @property Adress $adress
 */
class Client extends People implements Authentication
{
    private Adress $adress;

    public function __construct(
        string $nameClient,
        string $cpfClient,
        Adress $adress
    ) {
        parent::__construct($nameClient, $cpfClient);
        $this->adress = $adress;
    }

    public function getAdress(): Adress
    {
        return $this->adress;
    }

    public function authenticate(string $password): bool
    {
        return $password === "abcd";
    }
}
