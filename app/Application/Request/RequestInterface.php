<?php

namespace App\Application\Requests;

interface RequestInterface
{
    public function post(string $key):mixed;
    public function get(string $key):mixed;

    public function file(string $key):mixed;
}