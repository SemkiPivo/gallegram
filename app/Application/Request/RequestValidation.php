<?php

namespace App\Application\Request;

use App\Application\Alerts\Error;

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
                            $this->errors[$field][] = '"'. $field .'" field is required';
                        }
                        break;
                    case 'email':
                        if (!filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                            $this->errors[$field][] = '"'. $field .'" field must be in correct format';
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