<?php

namespace App\Services\Message\Factory;

use Exception;

abstract class MessageSenderFactory
{
    static public function getInstance(string $method)
    {
        $class = match ($method) {
            'database' => DatabaseMessageSenderFactory::class,
            'file' => FileMessageSenderFactory::class,
            default => null,
        };

        if ($class == null) {
            throw new Exception("Incorrect send method: $method");
        }

        return $class::make();
    }

    abstract static public function make();
}
