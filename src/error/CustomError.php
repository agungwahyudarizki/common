<?php

namespace NgZki\Common\Error;

use Exception;

class ErrorMessage {
    public string $field;
    public array $message;

    public function __construct(...$message)
    {
        $this->message = $message;
    }
}

class ErrorMessageList {
    private array $errors;

    public function __construct(ErrorMessage ...$errors) {
        $this->errors = $errors;
    }

    public function add(ErrorMessage $error) {
        $this->errors[] = $error;
    }

    public function all() {
        return $this->errors;
    }
}

abstract class CustomError extends Exception {
    public int $statusCode;
    public abstract function serializeErrors(): ErrorMessageList;
}
