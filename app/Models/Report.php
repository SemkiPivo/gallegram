<?php

namespace App\Models;

use App\Application\Database\Connection;
use App\Application\Database\Model;

class Report extends Model
{
    protected string $table = 'reports';
    protected array $fields = ['email', 'subject', 'message'];
    protected string $email;
    protected string $subject;
    protected string $message;

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setSubject(string $subject):void
    {
        $this->subject = $subject;
    }
    public function getSubject()
    {
        return $this->subject;
    }

    public function setMessage(string $message):void
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }


}