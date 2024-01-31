<?php

namespace App\Jobs\Message;

use App\Data\MessageData;
use App\Services\Message\Factory\MessageSenderFactory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MessageSendJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected string $method, protected MessageData $messageData)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $sender = MessageSenderFactory::getInstance($this->method);
        $sender->send($this->messageData);
    }
}
