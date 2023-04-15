<?php

namespace POO_PHP\Bank\Model;

/*
    * interface Authentication
    * @package POO_PHP\Bank\Model
    * @method authenticate(string $password): bool
*/

interface Authentication
{
    public function authenticate(string $password): bool;
}
