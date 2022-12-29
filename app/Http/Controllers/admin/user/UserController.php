<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Service\admin\UserService;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $limit= isset($request->limit) && $request->limit ? $request->limit : Setting_Static::LIMIT;
        $data = UserService::GetAllData($limit);
        return view('admin.user.index',['data' => $data]);
    }

    public function view($id){
        $user = new UserService();
        $data_info = $user->GetFirstUserInfo($id);
        return view('admin.user.view',['data_info' =>$data_info]);
    }

    public function add(){
        return view('admin.user.add');
    }

    public function create(Request $request){
        $data = $request->all();
        $validate= Validator::make($data, UserService::rules(), UserService::messages());
        if($validate->fails()) {
            return  back()->withInput()->withErrors($validate);
        }
        $data['name_avatar'] = isset($data['avatar']) && $data['avatar'] ? Setting_Dynamic::UploadImage($data['avatar'],Setting_Static::path_site_user) : '';
        $data['name_cover'] = isset($data['image_cover']) && $data['image_cover'] ? Setting_Dynamic::UploadImage($data['image_cover'],Setting_Static::path_site_user) : '';
        $model = new UserService();
        if($model->Add($data)){
            return Redirect::route('user-index')->with('success',Setting_Static::SUCCSESS_CREATE);
        }
        return back()->with('error', Setting_Static::ERROR_CREATE);
    }

    public function edit($id){
        $user = new UserService();
        $data =  $user->GetFirstUser($id);
        $data_info = $user->GetFirstUserInfo($id);
        return view('admin.user.edit',['data' => $data,'data_info' =>$data_info]);
    }

    public function update(Request $request,$id){
        $data= $request->all();

        $data['name_avatar'] = isset($data['avatar']) && $data['avatar'] ? Setting_Dynamic::UploadImage($data['avatar'],Setting_Static::path_site_user) : '';
        $data['name_cover'] = isset($data['image_cover']) && $data['image_cover'] ? Setting_Dynamic::UploadImage($data['image_cover'],Setting_Static::path_site_user) : '';

        $model = new UserService();
        if($model->Update($data,$id))
        {
            return Redirect::route('user-index')->with('success',Setting_Static::SUCCSESS_UPDATE);
        }
        return back()->withInput()->with('error',Setting_Static::ERROR_UPDATE);
    }

    public function delete($id){
        $model= new UserService();
        if($model->deleteUser($id)){
            return back()->with('success',Setting_Static::SUCCESS_DELETE);
        }
        return back()->with('success',Setting_Static::ERROR_DELETE);
    }

    public function resetPassword($id)
    {
        $model = new UserService();
        $data = $model->resetPassword($id);
        if($data){
            return back()->with('success',Setting_Static::SUCCSESS_UPDATE);
        }
        return back()->with('error',Setting_Static::ERROR_UPDATE);
    }

}
