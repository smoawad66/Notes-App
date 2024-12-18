<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{

    protected $routes = [];

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {

                Middleware::resolve($route['middleware']);
                
                return require base_path('Http/controllers/' . $route['controller']);
            }
        }
        abort();
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    public function only($key){
        $this->routes[count($this->routes)-1]['middleware'] = $key; 
    }

    // protected function abort($code = 404)
    // {
    //     http_response_code($code);
    //     require base_path("views/{$code}.php");
    //     die();
    // }
}
