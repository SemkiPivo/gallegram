<?php

namespace App\Services;

use App\Application\Alerts\Alert;
use App\Application\Auth\Auth;
use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Application\Validation\Validator;
use App\Enums\AlertEnum;
use App\Models\User;

class UserService implements UserServiceInterface
{

    public function registration(Request $request): void
    {
        $errors = $request->validation([
           'email' =>  ['required', 'email', 'unique:User'],
           'name' =>  ['required', 'max:64'],
           'password' =>  ['required', 'password_confirmed', 'min:6'],
        ]);
        if (!$request->validationStatus()){
            Alert::setMessage('Please provide correct registration data');
            Redirect::to('/registration');
        }

        $user = new User();
        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->setAvatar($request->post('avatar') ?? '');
        $user->setDefaultToken();
        $user->store();
        Alert::setMessage("Registration successful, please log in!", AlertEnum::SUCCESS);
        Redirect::to('/login');
    }

    public function login(Request $request): void
    {
        $errors = $request->validation([
            'email' =>  ['required', 'email', 'exists:User'],
            'password' =>  ['required'],
        ]);
        if (empty($errors)) {
            $user = (new User())->find('email', $request->post('email'));
            $passwordStatus = password_verify($request->post('password'), $user->getPassword());
            if ($passwordStatus){
                $token = Random::str(50);
                $user->update([Auth::getTokenColumn() => $token]);
                setcookie(Auth::getTokenColumn(), $token);
                Redirect::to('/');
            }
        }
        if (!$request->validationStatus()){
            Alert::setMessage('Incorrect data, please try again ');
            Redirect::to('/login');
        }
    }

    public function logout(): void
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(), null);
        Redirect::to('/');
    }
}