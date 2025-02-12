<?php

class RequestValidationError extends CustomError {
    public int $statusCode = 400;

    public function __construct(private $exceptions) {}

    public function serializeErrors(): ErrorMessageList
    {
        $errors = new ErrorMessageList();
        foreach ($this->exceptions as $key => $value) {
            $error = new ErrorMessage($value);
            $error->field = $key;
            $errors->add($error);
        }

        return $errors;
    }
}
