<?php

namespace App\Services;

use App\Application\Auth\Auth;
use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;

class UserService implements UserServiceInterface
{


    public function registration(Request $request): void
    {
        // TODO: Data validation

        $user = new User();
        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->setDefaultToken();
        $user->store();
        Redirect::to('/login');
    }

    public function login(Request $request): void
    {
        //TODO: Error messages

        $user = (new User())->find('email', $request->post('email'));
        if ($user){
            if (password_verify($request->post('password'), $user->getPassword())){
                $token = Random::str(50);
                $user->update([Auth::getTokenColumn() => $token]);
                setcookie(Auth::getTokenColumn(), $token);
                Redirect::to('/home');
            } else Redirect::to('/login');
        } else Redirect::to('/login');
    }

    public function logout(): void
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(), null);
        Redirect::to('/home');
    }
}