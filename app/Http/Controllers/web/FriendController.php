<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Services\FriendGroupService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    protected $friend;

    public function __construct(FriendGroupService $friend)
    {

        $this->friend = $friend;
    }
    public function index(){
        $idUserLogin = session()->get(Setting_Static::KEY.'-id');
        $data = $this->friend->Frienmd();

        return view('frontend.friend.index',[
            'data'=> $data
        ]);
    }
    public function addfriend(Request $request){
        $id =  $request->id;
        $status = $request->status;
        if($id != 0){
            $data = $this->friend->addFriend(session(Setting_Static::KEY.'-id'), $id,$status);
            if($data){
                return response()->json([
                    'status' => 200,
                    'msg' => $data,
                ]);
            }
            else{
                return response()->json([
                    'status' => 400,
                    'msg' => "Không thục hiện được.",
                ]);
            }
        }
        else{
            return response()->json([
                'status' => 100,
                'msg' => "Không tìm thấy người dùng.",
            ]);
        }
    }

    public function acept($group_id){
        $data = $this->friend->acept($group_id,1);
        if($data){
            return response()->json([
                'status' => 200,
                'msg' => "",
            ]);
        }
        return response()->json([
            'status' => 200,
            'msg' => "Không thực hiện được.",
        ]);
    }
    public function viewFriend()
    {
        $idUserLogin = session()->get(Setting_Static::KEY.'-id');
        $data = $this->friend->noFriend();
        return view('frontend.friend.add',[
            'data'=> $data,
            'idUserLogin' => $idUserLogin
        ]);
    }
    public function aceptFriend(){
        $data = $this->friend->aceptFriend();
        return view('frontend.friend.update',['data' => $data]);
    }


}
