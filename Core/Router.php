<?php

namespace Core;

class Router
{
    private $routes = [];

    public function get(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    public function post(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    public function route(string $uri, string $method): void
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri'] && strtoupper($method) === $route['method']) {
                require base_path($route['controller']);
            }
        }

    }

}