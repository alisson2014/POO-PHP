<?php

namespace POO_PHP\Bank\Model\Account;

use POO_PHP\Bank\Model\{AccessProperties, People, Adress, Authentication};

/**
 * class Client
 * @package POO_PHP\Bank\Model\Account
 * @property Adress $adress
 */
class Client extends People implements Authentication
{
    use AccessProperties;
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
