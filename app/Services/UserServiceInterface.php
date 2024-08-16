<?php

namespace App\Services;

use App\Application\Request\Request;

interface UserServiceInterface
{
    public function registration(Request $request): void;
    public function login(Request $request): void;
    public function logout(): void;
}