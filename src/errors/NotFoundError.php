<?php

class NotFoundError extends CustomError {
    public int $statusCode = 404;
    public $message;

    public function __construct() {
        $this->message = 'Not Found';
    }

    public function serializeErrors(): ErrorMessageList
    {
        $error = new ErrorMessage(
            $this->message
        );

        return new ErrorMessageList($error);
    }
}
