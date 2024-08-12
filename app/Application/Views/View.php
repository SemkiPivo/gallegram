<?php

namespace App\Application\Views;



use App\Application\Config\Config;
use App\Exceptions\ComponentViewNotFoundException;
use App\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{

    /**
     * @param string|null $page
     * @param array $params
     * @throws ViewNotFoundException
     */
    public static function show(string|null $page, array $params = []): void
    {
        extract($params);
        $path = __DIR__ . "/../../../views/$page.view.php";
        include $path;
    }

    /**
     * @param string $component
     * @param array|string|null $params
     * @return void
     * @throws ComponentViewNotFoundException
     */
    public static function component(string $component, array $params = []): void
    {
        extract($params);
        $path = __DIR__ . "/../../../views/components/$component.view.php";
        if (!file_exists($path)){
            throw new ComponentViewNotFoundException("Component ($component) not found", 404);
        }
        include $path;
    }

    public static function exception(\Exception $e): void
    {
        extract([
           'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'code' => $e->getCode(),
        ]);
        $path = __DIR__ . "/../../../views/".Config::get('app.exception_view').".view.php";
        if (!file_exists($path)){
            echo $e->getMessage(). "<br><hr>";
            echo "<pre>{$e->getTraceAsString()}</pre>";
            return;
        }
        include $path;
    }

}