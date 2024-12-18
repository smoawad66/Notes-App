<?php

use Core\Response;
use Core\Session;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}


function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
};

function view($path, $params = [])
{
    extract($params);
    require base_path("views/{$path}");
}

function partial($path, $params = [])
{
    extract($params);
    require base_path("views/partials/{$path}");
}

function auth_user(): bool
{
    return Session::has('user') ?? false;
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = null)
{
    return Session::get('old')[$key] ?? $default;
}

function error($key, $default = null)
{
    return Session::get('errors')[$key] ?? $default;
}
