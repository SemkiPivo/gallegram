<?php

namespace App\Application\Validation;

use App\Application\Database\Model;

class Validator implements ValidatorInterface
{
    public static function string(string $value, int $min = 1, int|float $max = INF)
    {
        $value = trim($value);
        $strlen = strlen(trim($value));

       return $strlen >= $min && $strlen <= $max;
    }

    public static function email(string $value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function password(string $password, string $passwordConfirmed = '')
    {
        return $password === $passwordConfirmed;
    }

    public static function unique(string $value, Model $model, string $field)
    {
        $checkModel = $model->find($field, $value);
        return empty($checkUser);
    }
}