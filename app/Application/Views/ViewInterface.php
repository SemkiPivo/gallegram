<?php

namespace app\Application\Views;

interface ViewInterface
{
    public static function show(string $page, array $params = []): void;
    public static function exception(\Exception $e): void;
    public static function component(string $component, array $params = []): void;
}