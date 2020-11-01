<?php
namespace App\Api;

class ApiMessages
{
    private $messages = [];

    public function __construct(string $message, array $data = [])
    {
        $this->messages['message'] = $message;
        $this->messages["errors"] = $data;
    }

    public function getMessage(){
        return $this->messages;
    }
}
