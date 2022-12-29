<?php


namespace App\Services;


use App\Models\User;
use App\Models\UserInfo;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\Hash;

class UserService
{
    static public function rules()
    {
        return [
            'username' => 'required|string|unique:user,username|min:5|max:50',
            'fullname' => 'required|string|min:5|max:255',
            'email' => 'required|unique:user|email',
            'phone' => 'required|unique:user|numeric',
            'password' => 'required|min:6|required_with:re_password|same:re_password',
            'address' => 'required|min:5'
        ];
    }

    static public function messages()
    {
        return [
            'username.unique' => 'Tên đăng nhập đã được dùng',
            'username.required' => 'Tên đăng nhập không được để trống',
            'username.min' =>'Nhập tối thiểu 5 kí tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => "Mật khẩu phải nhiều hơn 6 kí tự",
            'password.same' => 'Mật khẩu không trùng khớp',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không đúng định dạng',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.unique' => 'Số điện thoai trùng',
            'email.unique' => ' Email bị trùng',
            'phone.integer' => 'Phải là số',
            'fullname.required' => 'Họ và tên không được để trống',
            'fullname.min' => 'Nhập tối thiẻu 5 kí tự',
            'address.required' => 'Địa chỉ không được để trống',
            'address.min' => 'Nhập tối thiểu 5 kí tự'
        ];
    }
    public function addUserInfo($user,$request) {
        $user_info = new UserInfo();
        $user_info->user_id= $user->id;
        $user_info->email= $user->email;
        $user_info->phone = $user->phone;
        $user_info->fullname = $request['fullname'];
        $user_info->address = $request['address'];
        Setting_Dynamic::UpdateTime($user_info, 0);
        if($user_info->save()){
            return true;
        }
        return false;
    }
    public function register($request){
        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->on_last_time = time();
        $user->password = Hash::make($request['password']);
        $user->password_last_time = time();
        $user->remake_password = Hash::make($request['password']);
        $user->type = Setting_Static::STATIC_ONE;
        $user->status = Setting_Static::STATUS_ACTIVE;
        Setting_Dynamic::UpdateTime($user, 0);
        if($user->save()){
            if($this->addUserInfo($user, $request)){
                return true;
            }
        }
        return  false;
    }
}
