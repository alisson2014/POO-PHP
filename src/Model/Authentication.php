<?php

namespace POO_PHP\Bank\Model;

/** 
 * interface Authentication
 * @package POO_PHP\Bank\Model
 * @method bool authenticate(string $password)
 */

interface Authentication
{
    public function authenticate(string $password): bool;
}
