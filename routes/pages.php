<?php

use App\Application\Router\Route;
use App\Controllers\PagesController;
use App\Middleware\GuestMiddleware;

Route::page('/', PagesController::class, 'home');

Route::page('/login', PagesController::class, 'login', GuestMiddleware::class);
Route::page('/registration', PagesController::class, 'registration', GuestMiddleware::class);