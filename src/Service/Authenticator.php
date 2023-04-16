<?php

namespace POO_PHP\Bank\Service;

use POO_PHP\Bank\Model\Authentication;

class Authenticator
{
    public function tryLoggin(Authentication $authentication, string $password): void
    {
        if ($authentication->authenticate($password)) {
            echo "Ok. Usuário logado no sistema";
            exit();
        }

        echo "Ops. Senha incorreta";
    }
}
