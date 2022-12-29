<?php

namespace App\Services;

use App\Models\FriendGroup;
use App\Models\User;
use App\Models\UserInfo;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use App\Exceptions\GeneralException;


class  FriendGroupService
{

    protected $user;
    protected $friend;
    protected $userInfo;

    public function __construct(User $user, FriendGroup $friend, UserInfo $userInfo)
    {
        $this->user = $user;
        $this->friend = $friend;
        $this->userInfo = $userInfo;
    }

    public function addFriend($user_1 = 0, $user_2 = 0, $status = 0)
    {
        if ($user_1 != 0 && $user_2 != 0) {
            $data = FriendGroup::where('user_id_1', $user_1)->where('user_id_2', $user_2)->first();
            $data_2 = FriendGroup::where('user_id_1', $user_2)->where('user_id_2', $user_1)->first();
            if ($data || $data_2) {
                $data->status = $status;
                Setting_Dynamic::UpdateTime($data, 1);
                if ($data->save()) {
                    return "Chờ đối tác phản hồi";
                }
            } else {
                $friend = new  FriendGroup();
                $friend->user_id_1 = $user_1;
                $friend->user_id_2 = $user_2;
                $friend->status = isset($status) && $status ? $status : Setting_Static::STATIC_ZERO;
                Setting_Dynamic::UpdateTime($friend, 0);
                if ($friend->save()) {
                    return "Chờ đối tác phản hồi";
                }
            }
        } elseif ($user_1 != 0) {
            return "Chưa đăng nhập";
        } elseif ($user_2 != 0) {
            return "Không tìm thấy đói tượng bạn cần tìm!";
        }
        return "Lỗi lạ lắm";
    }
    public function acept($group_id,$status){
        $data= FriendGroup::find($group_id);
        $data->status = $status;
        if($data->save()){
            return true;
        }
        return false;

    }
    static public function listFriend()
    {
        $data = FriendGroup::where('status', Setting_Static::STATIC_ONE)->where('user_id_1', session(Setting_Static::KEY . '-id'))->orWhere('user_id_2', session(Setting_Static::KEY . '-id'))->orderBy('updated_at', 'DESC')->get()->toArray();
        if ($data) {
            return $data;
        }
        return false;
    }

    public function checkFriend($user_id)
    {
        $data = FriendGroup::where('status', Setting_Static::STATIC_ONE)
            ->where('user_id_1', session(Setting_Static::KEY . '-id'))
//            ->orWhere('user_id_2', session(Setting_Static::KEY . '-id'))
            ->where('user_id_2', $user_id)
//            ->orWhere('user_id_1', $user_id)
            ->first();
        $data_2 = FriendGroup::where('status', Setting_Static::STATIC_ONE)
            ->where('user_id_2', session(Setting_Static::KEY . '-id'))
            ->where('user_id_1', $user_id)
            ->first();
        if ($data) {
            return $data;
        } elseif ($data_2) {
            return $data_2;
        }
        return false;
    }

    static function checkFollow($user_id = 0)
    {
        $data = FriendGroup::where('user_id_1', session(Setting_Static::KEY . '-id'))->where('user_id_2', $user_id)->where('status', Setting_Static::STATIC_TWO)->first();
        if ($data) {
            return true;
        }
        return false;
    }

    public function noFriend()
    {
        $arr = [];
        $data = UserInfo::where('user_id', '<>', session(Setting_Static::KEY . '-id'))
            ->join('user', 'user.id', '=', 'user_info.user_id')
            ->where('user.status', Setting_Static::STATIC_ONE)
            ->orderBy('user.updated_at', 'DESC')
            ->get()
            ->toArray();
        foreach ($data as $key => $value) {
            if (!$this->checkFriend($value['user_id'])) {
                $arr[] = $value;
            }
        }
        return $arr;
    }

    public function Friend()
    {
        $data = $this->friend->where('status', Setting_Static::STATIC_ONE)
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

    public function aceptFriend()
    {
        $data = $this->friend->where('status', Setting_Static::STATIC_ZERO)
            ->where('user_id_2', session(Setting_Static::KEY . '-id'))
            ->orderBy('updated_at', 'desc')
            ->get()
            ->toArray();
        if ($data) {
            return $data;
        }
        return false;

    }
    // Lấy data user_id theo id và user_id
    static function getUserByID($group_id, $user_id){
        $data = FriendGroup::where('id' , $group_id)
            ->where('status', Setting_Static::STATIC_ONE)
            ->where('user_id_1', $user_id)
            ->orWhere('user_id_2', $user_id)
            ->first()
            ->toArray();
        return $data;

    }
}
