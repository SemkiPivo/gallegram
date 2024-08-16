<?php

namespace App\Application\Router;

use App\Controllers\PagesController;
use App\Exceptions\ViewNotFoundException;

class Router implements RouterInterface
{

    use RouterHelper;
    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $type = $requestMethod === 'POST' ? 'action' : 'page';
        $filteredRoutes = self::filter($routes, $type);

        foreach ($filteredRoutes as $route) {

            if ($route['uri'] === $uri) {
                if (!empty($route['middleware'])){
                    $middleware = new $route['middleware']();
                    $middleware->handle();
                }
                self::controller($route);
                return;
            }
        }
        if (!file_exists(__DIR__ . "/../../../views/{$type}s/$uri.view.php")){
            throw new ViewNotFoundException("'$uri' page not found", 404);
        }
    }
}