<?php

use App\Application\Router\Route;
use App\Controllers\ReportController;
use App\Controllers\UserController;

Route::post('/registration', UserController::class, 'registration');
Route::post('/login', UserController::class, 'login');
Route::post('/logout', UserController::class, 'logout');

Route::post('/contact', ReportController::class, 'create');
