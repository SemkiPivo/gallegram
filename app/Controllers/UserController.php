<?php

namespace App\Controllers;

use App\Application\Auth\Auth;
use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;
use App\Services\UserService;


class UserController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }
    public function registration(Request $request){
        $this->service->registration($request);
    }

    public function login(Request $request){
        $this->service->login($request);
    }

    public function logout(){
        $this->service->logout();
    }

}