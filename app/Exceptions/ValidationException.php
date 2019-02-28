<?php

namespace App\Exceptions;

use Throwable;

class ValidationException extends \Exception
{
    private $validationErrors;
    private $validationRules;

    public function __construct(array $validationErrors = [], array $validationRules = [], string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->validationErrors = $validationErrors;
        $this->validationRules = $validationRules;
        parent::__construct($message, $code, $previous);
    }

    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    public function getValidationRules()
    {
        return $this->validationRules;
    }
}
