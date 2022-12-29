<?php


namespace App\Service\admin;


use App\Models\User;
use App\Models\UserInfo;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserService
{
    static public function rules()
    {
        return [
            'username' => 'required|string|unique:user,username|min:5|max:50',
            'fullname' => 'required|string|min:5|max:255',
            'subname' => 'required|string|min:2|max:255',
            'birthday' => 'date_format:d/m/Y',
            'email' => 'required|unique:user|email',
            'phone' => 'required|unique:user|numeric',
            'password' => 'required|min:6|required_with:re_password|same:re_password',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'image_cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
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
            'subname.required' => 'Tên viết tắt không đuọc để trống',
            'subname.min' => 'Nhập tối thiểu 2 kí tự',
            'birthday.date_format' =>'Ngày tháng năm sinh không đúng địng dạng, định dạng d/m/Y',
            'avatar.required' => 'Ảnh đại diện không được để trống',
            'avatar.image' => 'Không đúng định dạng.',
            'avatar.mimes' => 'Định dạng không hợp lệ. Định dạng được phép(jepg,png,jpg,svg)',
            'avatar.max' => 'Tệp tin quá lớn, đăng tệp nhỏ lại. Không quá 5MB',
            'image_cover.required' => 'Ảnh đại diện không được để trống',
            'image_cover.image' => 'Không đúng định dạng.',
            'image_cover.mimes' => 'Định dạng không hợp lệ. Định dạng được phép(jepg,png,jpg,svg)',
            'image_cover.max' => 'Tệp tin quá lớn, đăng tệp nhỏ lại. Không quá 5MB',
        ];
    }


    protected function AddUserInfo($user,$request = []){
        $user_info = new UserInfo();
        $user_info->user_id= $user->id;
        $user_info->email= $user->email;
        $user_info->phone = $user->phone;
        $user_info->fullname = $request['fullname'];
        $user_info->subname = $request['subname'];
        $user_info->address = $request['address'];
        $user_info->hometown =$request['hometown'];
        $user_info->birthday = isset($request['birthday']) && $request['birthday'] ? strtotime($request['birthday']) :time();
        $user_info->avatar = $request['name_avatar'];
        $user_info->introduce = $request['introduce'];
        $user_info->relationship = $request['relationship'] ;
        $user_info->image_cover = $request['name_cover'];
        $user_info->path = Setting_Static::path_site_user;
        $user_info->story = $request['story'];
        Setting_Dynamic::UpdateTime($user_info, 0);
        if($user_info->save()){
            return true;
        }
        return false;
    }

    public function Add($request){
        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->on_last_time = time();
        $user->password = Hash::make($request['password']);
        $user->password_last_time = time();
        $user->remake_password = Hash::make($request['password']);
        $user->type = isset($request['type']) && $request['type'] ? $request['type'] : Setting_Static::STATIC_ONE;
        $user->status = isset($request['status']) && $request['status'] ? $request['status'] : Setting_Static::STATUS_INACTIVE;
        Setting_Dynamic::UpdateTime($user, 0);
        if($user->save()){
           if (self::AddUserInfo($user, $request)){
                return true;
           }
        }
        return false;
    }
    protected function UpdateUserInfo($user,$request = []){
        $user_info= self::GetFirstUserInfo($user->id);
        $user_info->email= isset($user->email) && $user->email ? $user->email : $user_info->email;
        $user_info->phone = isset($user->phone) && $user->phone ? $user->phone : $user_info->phone;
        $user_info->fullname = isset($request['fullname']) && $request['fullname'] ? $request['fullname'] : $user_info->fullname;
        $user_info->subname =  isset($request['subname']) && $request['subname']  ? $request['subname'] : $user_info->subname;
        $user_info->address = isset($request['address']) && $request['address']  ? $request['address'] : $user_info->address;
        $user_info->hometown =isset($request['hometown']) && $request['hometown']  ? $request['hometown'] : $user_info->hometown;
        $user_info->birthday = isset($request['birthday']) && $request['birthday'] ? strtotime($request['birthday']) : $user_info->birthday;
        $user_info->avatar = isset($request['name_avatar']) && $request['name_avatar'] ?$request['name_avatar'] : $user_info->avatar;
        $user_info->introduce = isset($request['introduce']) && $request['introduce'] ?$request['introduce'] : $user_info->introduce;
        $user_info->relationship =isset($request['relationship']) && $request['relationship'] ?  $request['relationship'] : $user_info->relationship;
        $user_info->image_cover = isset($request['name_cover']) && $request['name_cover'] ? $request['name_cover'] : $user_info->image_cover;
        $user_info->story= isset($request['story']) && $request['story'] ? $request['story'] : $user_info->story;
        $user_info->path = Setting_Static::path_site_user;
        Setting_Dynamic::UpdateTime($user_info, 1);
        if($user_info->save()){
            return true;
        }
        return false;
    }

    public function Update($request,$id){
        $user = self::GetFirstUser($id);
        $user->username = isset($request['username']) && $request['username'] ? $request['username'] : $user->username;
        $user->email = isset($request['email']) && $request['email'] ? $request['email'] : $user->email;
        $user->phone = isset($request['phone']) && $request['phone'] ? $request['phone'] : $user->phone;
        $user->on_last_time = time();
        $user->type = isset($request['type']) && $request['type'] ? $request['type'] : $user->type;
        $user->status = isset($request['status']) && $request['status'] ? $request['status'] : $user->status;
        Setting_Dynamic::UpdateTime($user,1);
        if($user->save()){
            if(self::UpdateUserInfo($user,$request)){
                return true;
            }

        }
        return false;

    }
    public function GetFirstUser($id){
        $data = User::find($id);
        return $data;
    }
    public function GetFirstUserInfo($id){
        $data= UserInfo::where('user_id' ,$id)->first();
        return $data;
    }
    public function resetPassword($id){
        $user= self::GetFirstUser($id);
        $user->password = Hash::make(Setting_Static::PASSWORD);
        $user->password_last_time = time();
        Setting_Dynamic::UpdateTime($user,1);
        if($user->save()){
            return true;
        }
        return false;
    }

    static function GetAllData($limit)
    {
        $data = User::paginate($limit)->toArray();
        return $data;
    }

    public function deleteUser($id){
        $user = User::find($id);
        if($user->delete()){
            $user_info= UserInfo::find($id);
            if($user_info->delete()){
                return true;
            }
        }
        return false;
    }
    static function Login($request){
        $data = User::where('username', $request['username'])->orWhere('email',$request['username'])->first();
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



}
