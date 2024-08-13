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
        $page_name = substr($uri, 15);
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $type = $requestMethod === 'POST' ? 'action' : 'page';
        $filteredRoutes = self::filter($routes, $type);

        foreach ($filteredRoutes as $route) {
//            dd($route['uri'] );
            if ($route['uri'] === $uri) {
                self::controller($route);
                return;
            }
        }
        if (!file_exists(__DIR__ . "/../../../views/{$type}s/$page_name.view.php")){
            throw new ViewNotFoundException("'$page_name' page not found", 404);
        }
    }
}