<?php

namespace POO_PHP\Bank\Model;

/**
 * trait AccessProperties
 * @package POO_PHP\Bank\Model
 * @method string __get(string $method)
 */

trait AccessProperties
{
    public function __get(string $method): string
    {
        $method = "get" . ucfirst($method);
        return $this->$method();
    }
}
