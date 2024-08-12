<?php

namespace App\Models;

class Report
{
    protected int $id;
    protected string $email;
    protected string $subject;
    protected string $message;
    protected string $created_at;
    protected string $updated_at;

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

    public function store(){

    }
}