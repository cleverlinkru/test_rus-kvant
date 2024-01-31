<?php

namespace App\Services\Message\Sender;

use App\Data\MessageData;
use DateTime;
use Illuminate\Support\Facades\Storage;

class FileMessageSender extends MessageSender
{
    public function send(MessageData $messageData)
    {
        $filename = (new DateTime())->format('Y-m-d H:i:s');
        $text = sprintf(
            "%s\n%s\n%s",
            $messageData->name,
            $messageData->phone,
            $messageData->message,
        );
        Storage::disk('local')->put("messages/$filename", $text);
    }
}
