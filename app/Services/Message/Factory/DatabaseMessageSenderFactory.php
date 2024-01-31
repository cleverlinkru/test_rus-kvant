<?php

namespace App\Services\Message\Factory;

use App\Services\Message\Sender\DatabaseMessageSender;

class DatabaseMessageSenderFactory extends MessageSenderFactory
{
    static public function make()
    {
        return new DatabaseMessageSender();
    }
}
