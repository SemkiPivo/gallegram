<?php

namespace App\Application\Views;



use App\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{

    /**
     * @throws ViewNotFoundException
     */
    public static function show(string $page=null): void
    {
        $path = __DIR__ . "/../../../views/$page.view.php";
        if ($page == null){
            throw new ViewNotFoundException("Page not found");
        }
        else include $path;
    }

    public static function exception(\Exception $e): void
    {
        $path = __DIR__ . "/../../../views/exception.view.php";
        include $path;
    }
}