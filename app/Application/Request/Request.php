<?php

namespace App\Application\Request;

use App\Application\Request\RequestInterface;

class Request implements RequestInterface
{
    use RequestValidation;
    private array $post;
    private array $get;
    private array $files;

    public function __construct(array $post, array $get, array $files)
    {
        $this->post = $post;
        $this->get = $get;
        $this->files = $files;
    }

    public function post(string $key): mixed
    {
        return $this->post[$key] ?? null;
    }

    public function get(string $key): mixed
    {
        return $this->get[$key] ?? null;
    }

    public function file(string $key): mixed
    {
        return $this->files[$key] ?? null;
    }

    public function validation(array $rules):array|bool
    {
        return $this->validate(
            $this->post,
            $rules
        );
    }
}