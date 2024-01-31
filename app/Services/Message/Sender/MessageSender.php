<?php

namespace App\Services\Message\Sender;

use App\Data\MessageData;

abstract class MessageSender
{
    abstract public function send(MessageData $messageData);
}
