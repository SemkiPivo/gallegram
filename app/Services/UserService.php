<?php

namespace App\Services;

use App\Application\Auth\Auth;
use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Application\Validation\Validator;
use App\Models\User;

class UserService implements UserServiceInterface
{


    public function registration(Request $request): void
    {
        $errors = [];

        if (!Validator::string($request->post('email'), max: 64)) $errors['email'] = 'Email is required and must be lesser then 64 characters';
        else if (!Validator::email($request->post('email'))) $errors['email'] = 'Please enter a correct email';
        if (!Validator::string($request->post('password'), max: 64)) $errors['password'] = 'Password is required and must be lesser then 64 characters';
        if (!Validator::password($request->post('password'), $request->post('password_confirmed'))) $errors['password_confirmed'] = 'Passwords are not the same';
        if (!Validator::unique($request->post('email'), $checkUser = new User, 'email')) $errors['database'] = 'User with this email already exist';

        if (empty($errors)){
            $user = new User();
            $user->setEmail($request->post('email'));
            $user->setName($request->post('name'));
            $user->setPassword($request->post('password'));
            $user->setDefaultToken();
            $user->store();
            Redirect::to('/login');
        } else {
            require('views/pages/registration.view.php');
        }
    }

    public function login(Request $request): void
    {
        $errors = [];
        $user = (new User())->find('email', $request->post('email'));
        if (!Validator::string($request->post('email'))) $errors['email'] = 'Email is required';
        else if (!Validator::email($request->post('email'))) $errors['email'] = 'Please enter a correct email';
        else if (!$user) $errors['database'] = 'There is no user with this email';
        if (!Validator::string($request->post('password'))) $errors['password'] = 'Password is required';
        else if (!isset($errors['database']) && !password_verify($request->post('password'), $user->getPassword())) $errors['password'] = 'Password is incorrect';

        if (empty($errors)){
            $token = Random::str(50);
            $user->update([Auth::getTokenColumn() => $token]);
            setcookie(Auth::getTokenColumn(), $token);
            Redirect::to('/home');
        } else require 'views/pages/login.view.php';
    }

    public function logout(): void
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(), null);
        Redirect::to('/home');
    }
}