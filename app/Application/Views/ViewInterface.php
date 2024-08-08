<?php

namespace app\Application\Views;

interface ViewInterface
{
    public static function show(string $page): void;
}