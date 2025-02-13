<?php

namespace NgZki\Common\Error;

class NotFoundError extends CustomError {
    public int $statusCode = 404;

    public function __construct() {
        $this->message = 'Not Found';
    }

    public function serializeErrors(): ErrorMessageList {
        $error = new ErrorMessage(
            $this->message
        );

        return new ErrorMessageList($error);
    }
}
