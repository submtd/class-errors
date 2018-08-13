<?php

namespace Submtd\ClassErrors;

trait HasErrors
{
    protected $errors = [];

    public function getErrors()
    {
        return $this->errors;
    }

    public function getLastError()
    {
        return end($this->errors);
    }

    public function getLastErrorMessage()
    {
        $error = end($this->errors);
        return isset($error['message']) ? $error['message'] : null;
    }

    public function getLastErrorCode()
    {
        $error = end($this->errors);
        return isset($error['message']) ? $error['message'] : null;
    }

    public function hasErrors()
    {
        return (bool) $this->errors;
    }

    public function clearErrors()
    {
        $this->errors = [];
    }

    protected function addError($message, $code = 0)
    {
        $this->errors[] = [
            'message' => $message,
            'code' => $code,
        ];
    }
}
