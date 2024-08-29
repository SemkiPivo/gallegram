<?php

namespace App\Application\Alerts;

use App\Enums\AlertEnum;

interface AlertInterface
{
    public static function setMessage(string $message, AlertEnum $type = AlertEnum::DANGER): void;
    public static function successMessage(bool $clear = false): ?string;
    public static function dangerMessage(bool $clear = false): ?string;
}