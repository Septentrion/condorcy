<?php

namespace App\Framework;

class Kernel
{

    public static function boot(): bool
    {
        $router = new Router();
        $router->buildRoutes();

        return true
    }
}
