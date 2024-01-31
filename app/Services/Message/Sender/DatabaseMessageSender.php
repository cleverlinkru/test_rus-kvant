<?php

namespace App\Services\Message\Sender;

use App\Data\MessageData;
use App\Models\Message;

class DatabaseMessageSender extends MessageSender
{
    public function send(MessageData $messageData)
    {
        Message::create([
            'name' => $messageData->name,
            'phone' => $messageData->phone,
            'message' => $messageData->message,
        ]);
    }
}
