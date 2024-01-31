<?php

namespace App\Services\Message;

use App\Data\MessageData;
use App\Jobs\Message\MessageSendJob;

class MessageService
{
    public function sendMessage(MessageData $messageData)
    {
        foreach (config('message.methods') as $method) {
            MessageSendJob::dispatch($method, $messageData);
        }
    }
}
