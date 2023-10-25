<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $userId;
    public $message;

    public function __construct(
        $userId,
        $message
    )
    {
        $this->message = $message;
        $this->userId = $userId;
    }


    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('private-user.'.$this->userId),
        ];
    }

    public function broadcastWith(): array
    {
        return [
            'id' =>  $this->userId,
            'message' =>  $this->message
        ];
    }
}
