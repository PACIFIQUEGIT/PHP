<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Repositories\ChatRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;



class ChatController extends Controller
{

    public function __construct(private ChatRepository $chat) {
        $this->chat = $chat;
    }

    public function index(Request $request, ?int $receiverid = null): Response
{
    $message = empty($receiverid) ? [] : $this->chat->getUserMessages((int) $request->user()->id, (int) $receiverid);
    return Inertia::render('Chat/Chat', [
        'messages' => $message,
        'recentMessages' => $this->chat->getRecentUsersWithMessage($request->user()->id),
        'receiver' => User::find($receiverid)
    ]);
}



    public function store(Request $request, ?int $receiverid = null): Response
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        if (empty($receiverid)) {
            return Inertia::render('chat.index');
        }

        try {
            $message = $this->chat->sendMessage([
                'senderid' => (int) $request->user()->id,
                'receiverid' => $receiverid,
                'message' => $request->message,
            ]);

            event(new MessageSent($message));

            return Inertia::render('chat.store', [
                'messages' => $message,
            'recentMessages' => $this->chat->getRecentUsersWithMessage($request->user()->id),
            'receiver' => User::find($receiverid)
            ]);
        } catch (\Throwable $th) {
            return Inertia::render('Chat.store', [
                'messages' => $message,
            'recentMessages' => $this->chat->getRecentUsersWithMessage($request->user()->id),
            'receiver' => User::find($receiverid)
            ]);
        }
    }
}
