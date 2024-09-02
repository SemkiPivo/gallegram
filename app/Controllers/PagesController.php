<?php

namespace App\Controllers;
use App\Application\Views\View;

class PagesController
{
    public function home(): void
    {
        View::show('pages/home', [
            'title' => 'Home'
        ]);
    }

    public function login(): void
    {
        View::show('pages/login', [
            'title' => 'Login'
        ]);
    }

    public function registration(): void
    {
        View::show('pages/registration', [
            'title' => 'Registration'
        ]);
    }

    public function profile(): void
    {
        View::show('pages/profile', [
            'title' => 'Profile'
        ]);
    }

}