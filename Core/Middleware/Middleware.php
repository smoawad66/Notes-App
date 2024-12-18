<?php

namespace Core\Middleware;

use Exception;


// A middleware is like a bridge than links initial request with the core of the application.
// We used it here to authorize the user.

class Middleware
{

    const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class,
    ];

    public static function resolve($key)
    {

        if (empty($key)) {
            return;
        }

        $middleware = self::MAP[$key] ?? false;

        if (!$middleware) {
            throw new Exception("No middleware found for '{$key}'.");
        }

        (new $middleware)->handle();
    }
}
