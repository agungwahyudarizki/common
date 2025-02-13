<?php

namespace NgZki\Common\Error;

class RequestValidationError extends CustomError {
    public int $statusCode = 400;
    private $errors;

    public function __construct(private $exceptions) {
        $this->errors = new ErrorMessageList();
    }

    public function serializeErrors(): ErrorMessageList
    {
        foreach ($this->exceptions as $key => $value) {
            $error = new ErrorMessage($value);
            $error->field = $key;

            $this->errors->add($error);
        }

        return $this->errors;
    }
}
