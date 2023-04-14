<?php

namespace POO_PHP\Bank\Model;

interface Authentication
{
    public function authenticate(string $password): bool;
}
