<?php

namespace App\Service\admin;

use App\Models\UserAdmin;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\Hash;

class UserAdminService
{
    static public function rules()
    {
        return [
            'username' => 'required|string|unique:user_admin,username|min:5|max:150',
            'email' => 'required|unique:user_admin|email',
            'phone' => 'required|unique:user_admin|numeric',
            'password' => 'required|min:6|required_with:re_password|same:re_password',
        ];
    }

    static public function messages(){
        return [
            'username.unique' => 'Tên đăng nhập đã được dùng',
            'username.required' => 'Tên đăng nhập không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'=> "Mật khẩu phải nhiều hơn 6 kí tự",
            'password.same' => 'Mật khẩu không trùng khớp',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không đúng định dạng',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.unique' => 'Số điện thoai trùng',
            'email.unique' => ' Email bị trùng',
            'phone.integer' => 'Phải là số'
        ];
    }

    public function addUserAdmin($request){
        $userAdmin = new UserAdmin();
        $userAdmin->username = $request['username'];
        $userAdmin->password = Hash::make($request['password']);
        $userAdmin->email = $request['email'];
        $userAdmin->phone = $request['phone'];
        $userAdmin->type = isset($request['type']) && $request['type'] ? $request['type'] : Setting_Static::STATIC_ZERO;
        $userAdmin->status = isset($request['status']) && $request['status'] ? $request['status'] : Setting_Static::STATUS_INACTIVE;
        Setting_Dynamic::UpdateTime($userAdmin, 0);
        if($userAdmin->save()){
            return true;
        }
        return false;
    }

    public function updateUserAdmin($request,$id){
        $userAdmin = UserAdmin::find($id);
        $userAdmin->username = isset($request['username']) && $request['username'] ? $request['username'] : $userAdmin->username;
        $userAdmin->email = isset($request['email']) && $request['email'] ? $request['email'] : $userAdmin->email;
        $userAdmin->phone = isset($request['phone']) && $request['phone'] ? $request['phone'] : $userAdmin->phone;
        $userAdmin->type = isset($request['type']) && $request['type'] ? $request['type'] : $userAdmin->type;
        $userAdmin->status = isset($request['status']) && $request['status'] ? $request['status'] : $userAdmin->status ;
        Setting_Dynamic::UpdateTime($userAdmin, 1);
        if($userAdmin->save())
        {
            return true;
        }
        return false;
    }

    static public function LoginUserAdmin($request){
        $data = UserAdmin::where('username', $request['username'])->first();
        if($data){
            $password = Hash::check($request['password'],$data['password']);
            if (isset($password) && $password) {
                return $data;
            } else {
                return false;
            }
        }
        return false;
    }


     public function deleteUserAdmin($id){
        $userAdmin = UserAdmin::find($id);
        if($userAdmin->delete()){
            return true;
        }
        return false;
    }

    public function resetPassword($id){
        $userAdmin = UserAdmin::find($id);
        $userAdmin->password = Hash::make(Setting_Static::PASSWORD);
        Setting_Dynamic::UpdateTime($userAdmin,1);
        if($userAdmin->save()){
            return true;
        }
        return false;
    }


    public function GetDataOne($id){
        $userAdmin = UserAdmin::find($id)->toArray();
        return $userAdmin;
    }

    static public function GetDataAll($limit, $page, $count= false){
        $data = UserAdmin::limit($limit)->offset(($page-1)*$limit)->get()->toArray();
        if($count==true){
            $count = UserAdmin::count();
            return  $count;
        }
        return $data;
    }
}
