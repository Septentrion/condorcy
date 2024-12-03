<?php

namespace App\Condorcy\Session;

use App\Condorcy\DBAL\Connector;

class Session
{
    public static function start(): void
    {
        session_start();
    }

    public static function stop(): void
    {
        session_destroy();
    }

    public static function put(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        return $_SESSION[$key];
    }

    public function remove($key): void
    {
        unset $_SESSION[$key];
    }
}
