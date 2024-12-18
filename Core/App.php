<?php

namespace Core;

class App{

    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $func)
    {
        static::container()->bind($key, $func);
    }

    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}