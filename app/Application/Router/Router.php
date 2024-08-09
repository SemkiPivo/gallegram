<?php

namespace App\Application\Router;

use App\Controllers\PagesController;
use App\Exceptions\ViewNotFoundException;

class Router implements RouterInterface
{

    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $page_name = substr($uri, 15);
        foreach ($routes as $route) {
            if ($route['uri'] === $uri) {
                $controller = new $route['controller']();
                $method = $route['method'];
                $controller->$method();
                break;
            }
        }
        if (!file_exists(__DIR__ . "/../../../views/pages/$page_name.view.php")){
            throw new ViewNotFoundException("'$page_name' page not found", 404);
        }
    }
}