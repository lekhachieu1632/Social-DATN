<?php


namespace App\Services;


use App\Models\FriendGroup;
use App\Models\Message;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;

class MessageService
{
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function Friend()
    {
        $data = FriendGroup::where('status', Setting_Static::STATIC_ONE)
            ->where('user_id_1', session(Setting_Static::KEY . '-id'))
            ->orWhere('user_id_2', session(Setting_Static::KEY . '-id'))
            ->orderBy('updated_at', 'desc')
            ->get()
            ->toArray();
        if ($data) {
            return $data;
        }
        return false;

    }
    public function getMessageId()
    {
        $arr= [];

        $data= $this->Friend();

        foreach ($data as $key => $value){
            $model= $this->message->where('group_id',$value['id'])->orderBy('updated_at','desc')->first();
            if($model){
                $arr[] = array_merge($value, $model->toArray());
            }
        }

        return $data;

    }

    public function getMessage($group_id = 0)
    {
        if ($group_id != 0) {
            $data = $this->message::where(['group_id' => $group_id])->with('getUser')->limit(Setting_Static::LIMIT)->orderBy('id', 'ASC')->get();
            return $data;
        }
        return false;
    }

    public function SendMessage($request)
    {
        if ($request) {
            $message = new Message();
            $message->user_id = $request['id'];
            $message->group_id = $request['group_id'];
            $message->message = $request['message'];
            $message->status = Setting_Static::STATIC_ONE;
            Setting_Dynamic::UpdateTime($message, 0);
            if ($message->save()) {
                return $message;
            }
        }
        return false;
    }

    public function delete($id){
        if($this->message::where('id',$id)->delete())
        {
            return true;
        }
        return  false;
    }
}
