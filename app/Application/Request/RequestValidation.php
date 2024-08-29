<?php

namespace App\Application\Request;

use App\Application\Alerts\Error;
use App\Application\Config\Config;

trait RequestValidation
{
    private array $errors = [];

    protected function validate(array $data, array $fields): array|bool
    {
        foreach ($fields as $field => $rules){
            foreach ($rules as $rule){
                switch ($rule){
                    case 'required':
                        if (empty($data[$field])) {
                            $this->errors[$field][] = 'This field is required';
                        }
                        break;
                    case 'email':
                        if (!filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                            $this->errors[$field][] = 'This field must be in the correct format';
                        }
                        break;
                    case 'password_confirmed':
                        if ($data[$field] !== $data[Config::get('validation.password_confirmation_title')]) {
                            $this->errors[$field][] = 'Passwords are not the same';
                        }
                        break;
                }
            }
        }
        Error::store($this->errors);
        return $this->errors;
    }

    public function validationStatus(): bool
    {
        return empty($this->errors);
    }
    public function errors(): array
    {
        return $this->errors;
    }
}