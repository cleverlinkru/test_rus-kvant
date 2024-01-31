<?php

namespace App\Services\Message\Factory;

use App\Services\Message\Sender\FileMessageSender;

class FileMessageSenderFactory extends MessageSenderFactory
{
    static public function make()
    {
        return new FileMessageSender();
    }
}
