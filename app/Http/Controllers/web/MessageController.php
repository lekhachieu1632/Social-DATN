<?php

namespace App\Http\Controllers\web;

use App\Events\MessageSend;
use App\Http\Controllers\Controller;
use App\Models\FriendGroup;
use App\Models\UserInfo;
use App\Services\FriendGroupService;
use App\Services\MessageService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct(FriendGroupService $friendGroupService, MessageService $messageService)
    {
        $this->friendGroupService = $friendGroupService;
        $this->messageService = $messageService;
    }

    public function index()
    {
        $data = $this->messageService->getMessageId();
        return view('frontend.message.index',['data' => $data]);
    }

    public function addMessage($id)
    {
        if ($this->friendGroupService->checkFriend($id)) {
            $gruop_id = $this->friendGroupService->checkFriend($id)['id'];
            $data = UserInfo::where('user_id', $id)->first()->toArray();
            $data_mess = $this->messageService->getMessage($gruop_id) ? $this->messageService->getMessage($gruop_id) : '';
            return view('frontend.message.add', ['data' => $data, 'gruop_id' => $gruop_id, 'data_mess' => $data_mess]);
        }
        return back();
    }

    public function getMessage($group_id)
    {
        $data = $this->messageService->getMessage($group_id);
        if ($data) {
            return response()->json([
                'status' => 200,
                'data' => $data,
                'msg' => 'Lấy thông tin thành công!'
            ]);
        } else
            return response()->json([
                'status' => 400,
                'data' => '',
            ]);
    }

    public function sendMessage(Request $request)
    {
        $data = $request->all();
        $model = $this->messageService->SendMessage($data);

        if ($model) {
            broadcast(new MessageSend($data,$model))->toOthers();
            return response()->json([
                'status' => 200,
                'msg' => 'Gửi tin nhắn thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'msg' => 'Gửi tin nhắn không thành công!'
            ]);
        }
        return response()->json([
            'status' => 500,
            'msg' => 'Lỗi mạng!'
        ]);
    }

    public function renderMess(Request $request){
        $user_to=0;
        $group_id = $request->get('group_id');
        $user_id = session(Setting_Static::KEY.'-id');
        $data_group = $this->friendGroupService::getUserByID($group_id, $user_id);
        if($data_group){
            if ($data_group['user_id_1'] == $user_id)
                $user_to =$data_group['user_id_2'];
            elseif ($data_group['user_id_2'] == $user_id)
                $user_to = $data_group['user_id_1'];
        }
        $data_mess = $this->messageService->getMessage($group_id) ? $this->messageService->getMessage($group_id) : '';
        if($data_mess){
            $html = view('frontend.message.view',['data_mess' => $data_mess,'user_id' => $user_id, 'user_to' => $user_to ])->render();
            return response()->json([
                'status' => 200,
                'html' => $html,
                'msg' => 'Thành công!'
            ]);
        }
        else{
            return response()->json([
                'status' => 400,
                'msg' => 'Render không thành công!'
            ]);
        }


    }

    public function delete($id){
        if($this->messageService->delete($id)){
            return back();
        }
        return back();
    }
}
