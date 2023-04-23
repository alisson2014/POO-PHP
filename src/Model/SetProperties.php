<?php

namespace POO_PHP\Bank\Model;

/**
 * trait SetProperties
 * @package POO_PHP\Bank\Model
 * @method void __set(string $method, string $value)
 */
trait SetProperties
{
    public function __set(string $method, string $value): void
    {
        $method = "set" . ucfirst($method);
        $this->$method($value);
    }
}
