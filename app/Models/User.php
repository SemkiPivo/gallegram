<?php

namespace App\Models;

use App\Application\Database\Model;

class User extends Model
{
    protected string $table = 'users';
    protected array $fields = ['email', 'name', 'avatar', 'password', 'token'];
    protected string $email;
    protected string $name;
    protected ?string $avatar;
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
    public function setAvatar(string $avatar):void
    {
        $this->avatar = $avatar;
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
    public function getAvatar(): string
    {
        return $this->avatar;
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