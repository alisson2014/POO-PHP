<?php

namespace POO_PHP\Bank\Model;

trait AccessProperties
{
    public function __get(string $method)
    {
        $method = "get" . ucfirst($method);
        return $this->$method();
    }
}
