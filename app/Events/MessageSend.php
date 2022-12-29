<?php

namespace App\Events;

use App\Models\UserInfo;
use App\Services\FriendGroupService;
use App\Setting\Setting_Static;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSend implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $user;
    public $message;
    public $user_now; /// userr hiện tại đăng nhập
    public $user_to;  //User nguoi nhan
    public $return;
    private $data_group;
    private $group_data;

    public function __construct($request, $model)
    {
        $this->user_now = session(Setting_Static::KEY . '-id');
        $data = UserInfo::find($request['id'])->toArray();
        $this->data_group = FriendGroupService::getUserByID($request['group_id'], $request['id']);
        if ($this->data_group['user_id_1'] == $this->user_now)
            $this->user_to = $this->data_group['user_id_2'];
        elseif ($this->data_group['user_id_2'] == $this->user_now)
            $this->user_to = $this->data_group['user_id_1'];
        $this->user = $data;
        $this->message = $request['message'];
        $this->return = $model;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */

    public function broadcastOn()
    {
        return ['message'];
    }
}
