<?php

use App\Application\Router\Route;
use App\Controllers\ReportController;

Route::post('/contact', ReportController::class, 'store');
