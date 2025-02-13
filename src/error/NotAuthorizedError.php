<?php

namespace NgZki\Common\Error;

class NotAuthorizedError extends CustomError {
    public int $statusCode = 401;

    public function __construct() {
        $this->message = 'Not Authorized';
    }

    public function serializeErrors(): ErrorMessageList {
        $error = new ErrorMessage(
            $this->message
        );

        return new ErrorMessageList($error);
    }
}
