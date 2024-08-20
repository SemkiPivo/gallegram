<?php

namespace App\Models;

use App\Application\Database\Model;

class User extends Model
{
    protected string $table = 'users';
    protected array $fields = ['email', 'name', 'password', 'token'];
    protected string $email;
    protected string $name;
    protected string $password;
    protected ?string $token;

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function setPassword(string $password):void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setDefaultToken():void
    {
        $this->token = null;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
}