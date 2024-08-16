<?php

namespace App\Application;
use App\Application\Auth\Auth;
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
        } catch (ViewNotFoundException|ComponentViewNotFoundException|\PDOException $e) {
            if (Config::get("app.debug_mode") == false && get_class($e) == \PDOException::class){
                View::error(500);
            } else
            View::exception($e);
        }
    }

    private function handle()
    {
        Config::init();
        require_once __DIR__ . '/../../routes/pages.php';
        require_once __DIR__ . '/../../routes/actions.php';
        $router = new Router();
        Auth::init();
        $router->handle(Route::list());
    }
}

//Timecode: 4:31:20