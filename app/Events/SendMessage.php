<?php


namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

use App\Message;
use App\User;
use Illuminate\Broadcasting\Channel;

class SendMessage implements ShouldBroadcast
{
    use SerializesModels;
    public $message;
    public $user;

    public function __construct(Message $message)
    {
        $this->message = $message;
        $this->user = Auth::user();
    }

    public function broadcastOn()
    {
        
        return new Channel("room.{$this->message->room_id}");
    }
}