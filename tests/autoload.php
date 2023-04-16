<?php

spl_autoload_register(function (string $path) {
    $path = str_replace("POO_PHP\\Bank", "../src", $path);
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);
    $path .= ".php";

    if (file_exists($path)) {
        require_once $path;
    }
});
