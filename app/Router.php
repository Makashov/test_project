<?php

namespace App;

use App\Controllers\ArticleController;
use App\Controllers\BaseController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;

class Router
{
    protected static array $routes = [
        '' => HomeController::class,
        'categories' => CategoryController::class,
        'articles' => ArticleController::class,
    ];

    public static function handle($uri): void
    {
        $routeParts = explode('/', $uri);
        $uri = $routeParts[1];

        if (isset(static::$routes[$uri])) {
            $controller = static::$routes[$routeParts[1]];
            $param = $routeParts[2] ?? null;

            /** @var BaseController $controller */
            $controller = new $controller();

            $controller->handle(['id' => $param]);
            return;
        }

        echo "ERROR 404";
    }
}