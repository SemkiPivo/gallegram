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
        $errors = $request->validation([
            'password' =>  ['required', 'password_confirmed'],
           'email' =>  ['required', 'email'],
           'name' =>  ['required'],
        ]);
        if (!$request->validationStatus()){
            Redirect::to('/registration');
        }

        if (empty($errors)){
            $user = new User();
            $user->setEmail($request->post('email'));
            $user->setName($request->post('name'));
            $user->setPassword($request->post('password'));
            $user->setAvatar($request->post('avatar') ?? '');
            $user->setDefaultToken();
            $user->store();
            Redirect::to('/login');
        } else {
            Redirect::to('/registration');
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
            Redirect::to('/');
        } else require 'views/pages/login.view.php';
    }

    public function logout(): void
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(), null);
        Redirect::to('/');
    }
}