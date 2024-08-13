<?php

namespace App\Application\Requests;

class Request implements RequestInterface
{
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
}