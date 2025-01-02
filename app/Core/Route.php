<?php

namespace App\Core;

class Route
{
    private static $routes = [];

    public static function add($uri, $controller)
    {
        self::$routes[$uri] = $controller;
    }

    public static function dispatch($uri)
    {


        if (array_key_exists($uri, self::$routes)) {
            $controller = self::$routes[$uri];
            [$class, $method] = explode('@', $controller);
            $class = "App\\Controllers\\" . $class;
            if (class_exists($class) && method_exists($class, $method)) {
                call_user_func_array([new $class, $method], []);
            } else {
                http_response_code(404);
                echo "404 Not Found";
            }
        } else {

            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
