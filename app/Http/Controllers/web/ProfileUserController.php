<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\PostService;
use App\Services\ProfileUserService;
use App\Setting\Setting_Static;

class ProfileUserController extends Controller
{
    protected $postService;
    protected $profileUser;

    public function __construct(
        PostService $postService,
        ProfileUserService $profileUser)
    {
        $this->postService = $postService;
        $this->profileUser = $profileUser;
    }

    public function viewAbout($idUser)
    {
        $user = User::find($idUser);
        $posts = $this->postService->list($idUser);
        return view('frontend.profile.about',[
            'user' => $user,
            'idUser' => $idUser,
            'posts' => $posts,
        ]);
    }

    public function viewFriend($idUser)
    {
        $friends = $this->profileUser->listFriend($idUser);
        return view('frontend.profile.friend',[
            'friends' => $friends
        ]);
    }

    public function viewImage($idUser)
    {
        $user = User::find($idUser);
        $posts = $this->postService->list($idUser);
        return view('frontend.profile.image',[
            'posts' => $posts,
            'user' => $user,
            'idUser' => $idUser,
        ]);
    }

    public function updateAvatar(ProfileRequest $request, $idUser)
    {
        $userInfo = $this->profileUser->updateAvatar($request->all(), $idUser);
        if ($userInfo) {
            return response()->json([
                'status' => 200,
                'userInfo' => $userInfo,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'UserInfo Not Found',
            ]);
        }
    }

    public function updateBanner(ProfileRequest $request, $idUser)
    {
        $userInfo = $this->profileUser->updateBanner($request->all(), $idUser);
        if ($userInfo) {
            return response()->json([
                'status' => 200,
                'userInfo' => $userInfo,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'UserInfo Not Found',
            ]);
        }
    }
}
