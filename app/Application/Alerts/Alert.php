<?php

namespace App\Application\Alerts;

use App\Enums\AlertEnum;

class Alert implements AlertInterface
{

    public static function setMessage(string $message = null, AlertEnum $type = AlertEnum::DANGER): void
    {
        if (isset($message)) setcookie("message.$type->value", $message);
        else {
            unset($_COOKIE["message_$type->value"]);
            setcookie("message.$type->value", null);
        }
    }

    public static function dangerMessage(bool $clear = false): ?string
    {
        $message = $_COOKIE['message_danger'] ?? null;
        if ($clear) self::setMessage();
        return $message;
    }

    public static function successMessage(bool $clear = false): ?string
    {
        $message = $_COOKIE['message_success'] ?? null;
        if ($clear) self::setMessage(type: AlertEnum::SUCCESS);
        return $message;
    }
}