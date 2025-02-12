<?php

namespace NgZki\Common\Error;

class BadRequestError extends CustomError {
    public int $statusCode = 400;

    public function __construct(public string $message) {}

    public function serializeErrors(): ErrorMessageList {
        $error = new ErrorMessage(
            $this->message
        );

        return new ErrorMessageList($error);
    }
}
