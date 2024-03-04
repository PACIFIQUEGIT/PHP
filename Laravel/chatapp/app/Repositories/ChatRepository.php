<?php

namespace App\Repositories;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class ChatRepository
{
    public function getUserMessages(int $senderid, int $receiverid)
    {
        return Message::whereIn('senderid', [$senderid, $receiverid])
        ->whereIn('receiverid', [$senderid, $receiverid])
        ->get();
    }

    public function getRecentUsersWithMessage(int $senderid): array
    {
        DB::statement("SET SESSION sql_mode=''");

        $recentMessages = Message::where(function ($query) use ($senderid) {
            $query->where('senderid', $senderid)
                  ->orWhere('receiverid', $senderid);
        })->groupBy('senderid', 'receiverid')
          ->select('senderid', 'receiverid', 'message')
          ->orderBy('id', 'desc')
          ->limit(30)
          ->get();

          return $this->getFilterRecentMessages($recentMessages, $senderid);

    }

    public function sendMessage(array $data): Message
    {
        return Message::create($data);
    }

    public function getFilterRecentMessages(Collection $recentMessages, int $senderid): array
    {
        $recentUsersWithMessage = [];
        $usedUserids = [];
        foreach ($recentMessages as $message) {
            $userid = $message->senderid == $senderid ? $message->receiverid : $message->senderid;
            if (!in_array($userid, $usedUserids)) {
                $recentUsersWithMessage[] = [
                    'userid' => $userid,
                    'message' => $message->message
                ];
                $usedUserids[] = $userid;
            }
        }

        foreach ($recentUsersWithMessage as $key => $userMessage) {
            $recentUsersWithMessage[$key]['name'] = User::where('id', $userMessage['userid'])->value('name') ?? '';
        }
        
        return $recentUsersWithMessage;
    }
}
