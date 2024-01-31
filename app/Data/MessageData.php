<?php

namespace App\Data;

class MessageData
{
    public string $name;

    public string $phone;

    public string $message;

    static function fromArray(array $data)
    {
        return new self(
            name: $data['name'] ?? '',
            phone: $data['phone'] ?? '',
            message: $data['message'] ?? '',
        );
    }

    protected function __construct(
        string $name,
        string $phone,
        string $message,
    ) {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }
}
