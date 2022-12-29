<?php

namespace App\Services;

use App\Models\FriendGroup;
use App\Models\UserInfo;
use App\Setting\Setting_Static;
use Exception;
use Illuminate\Support\Str;

class ProfileUserService {
    protected $userInfo;
    protected $friendGroup;

    public function __construct(
        UserInfo $userInfo,
        FriendGroup $friendGroup)
    {
        $this->userInfo = $userInfo;
    }

    public function listFriend($idUser)
    {
        return $this->friendGroup->where('user_id_1', $idUser)
            ->orWhere('user_id_2', $idUser)
            ->where('status', 1)->get();
    }

    public function updateAvatar($request, $idUser)
    {
        try {
            $userInfo = UserInfo::find($idUser);
//            if (isset($request['avatar'])) {
//                $file = $request['avatar'];
//                $imagePath = time()."_".Str::random(5)."_".$file->getClientOriginalName();
//                $file->move(public_path(Setting_Static::path_image. '/user'), $imagePath);
//                $userInfo->avatar = $imagePath;
//            }
            $userInfo->avatar = $request['avatar'];
            $userInfo->save();
            return $userInfo;
        } catch (Exception $e) {
            return "Cap nhat khong thanh cong";
        }
    }

    public function updateBanner($request, $idUser)
    {
        try {
            $userInfo = UserInfo::find($idUser);
            $userInfo->image_cover = $request['banner'];
            $userInfo->save();
            return $userInfo;
        } catch (Exception $e) {
            return "Cap nhat khong thanh cong";
        }
    }
}
