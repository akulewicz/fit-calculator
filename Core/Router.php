<?php

class Router
{
    private $routes = [];

    public function get(string $uri, string $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    public function route(string $uri) : void
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri']) {
                require base_path($route['controller']);
            }
        }

    }

}