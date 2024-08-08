<?php

namespace App\Application\Views;



use App\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{

    /**
     * @throws ViewNotFoundException
     */
    public static function show(string $page): void
    {
        $path = __DIR__ . "/../../../views/$page.view.php";
        if (!file_exists($path)){
            throw new ViewNotFoundException("View ($path) not found");
        }
        include $path;
    }
}