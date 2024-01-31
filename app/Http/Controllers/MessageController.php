<?php

namespace App\Http\Controllers;

use App\Data\MessageData;
use App\Http\Requests\MessageRequest;
use App\Services\Message\MessageService;

class MessageController extends Controller
{
    public function store(MessageRequest $request, MessageService $messageService)
    {
        $messageService->sendMessage(MessageData::fromArray([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]));

        return redirect()->route('home')->with('res', true);
    }
}
