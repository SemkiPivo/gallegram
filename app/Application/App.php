<?php

namespace App\Application;
use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Application\Views\View;
use App\Exceptions\ViewNotFoundException;

class App
{
    //timecode 1:04
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException $e) {
            View::exception($e);
        }
    }

    private function handle()
    {
        require_once __DIR__ . '/../../routes/pages.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}