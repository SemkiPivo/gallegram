<?php

namespace App\Application;
use App\Application\Config\Config;
use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Application\Views\View;
use App\Exceptions\ComponentViewNotFoundException;
use App\Exceptions\ViewNotFoundException;

class App
{
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException|ComponentViewNotFoundException $e) {
            View::exception($e);
        }
    }

    private function handle()
    {
        Config::init();
        require_once __DIR__ . '/../../routes/pages.php';
        require_once __DIR__ . '/../../routes/actions.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}

//Timecode: 3:14:00