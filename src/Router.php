<?php

namespace App;

Class Router
{
    private $routes = [
        'test' => 'Hello',
    ];
    public function run()
    {
        $url = htmlspecialchars(trim($_SERVER['REQUEST_URI']));
        $parsed = trim($url, '/');
        foreach ($this->routes as $route => $controller) {
            if ($route == $parsed) {
                $str = "App"."\\".$controller;
                $controllerObj = new $str;
            } else {
                echo '404 not found';
            }
        }
    }
}