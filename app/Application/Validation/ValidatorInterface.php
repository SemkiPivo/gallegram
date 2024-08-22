<?php

namespace App\Application\Validation;

use App\Application\Database\Model;

interface ValidatorInterface
{
    public static function string(string $value, int $min = 1, int|float $max = INF);

    public static function email(string $value);
    public static function password(string $password, string $passwordConfirmed = '');

    public static function unique(string $value, Model $model, string $field);
}