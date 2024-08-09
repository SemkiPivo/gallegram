<?php

namespace App\Application\Views;



use App\Application\Config\Config;
use App\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{

    /**
     * @throws ViewNotFoundException
     */
    public static function show(string $page=null): void
    {
        $path = __DIR__ . "/../../../views/$page.view.php";
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