<?php

namespace App\Setting;

use App\Setting\Setting_Static;
use Illuminate\Support\Str;


// Setting động
class Setting_Dynamic
{

    // Login
    static function rules(){
        return[
            'username' => 'required',
            'password' => 'required|min:5',
        ];
    }
    static function messages(){
        return[
            'username.required' => 'Tên đăng nhập không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'=> "Mật khẩu phải nhiều hơn 5",
        ];
    }




    // Lấy thuộc tính status
    static  function GetStatus(){
        return [
            Setting_Static::STATUS_ACTIVE => 'Hoạt động',
            Setting_Static::STATUS_INACTIVE => 'Khóa',
            Setting_Static::STATUS_INLOCKED => 'Tạm khóa'
        ];
    }
    // User Thuộc loại người dùng nào 1 Người dùng bình thường 2 Doanh nghiệp 3 khác
    static function GetType(){
        return [
            Setting_Static::STATIC_ONE => 'Người dùng',
            Setting_Static::STATIC_TWO => 'Doanh nghiệp',
            Setting_Static::STATIC_THREE => 'Khác'
        ];
    }
    // User Admin loại người dùng, 1 admin quyền cao nhất, 2 quyền khác.

    static function GetTypeAdmin(){
        return [
            Setting_Static::STATIC_ONE => 'Admin',
            Setting_Static::STATIC_TWO => 'Dev',
            Setting_Static::STATIC_THREE => 'Khác'
        ];
    }

    // Tình trạng mối quan hệ
    static function GetRelationship(){
        return [
            Setting_Static::STATIC_ONE => 'Độc thân',
            Setting_Static::STATIC_TWO => 'Hẹn hò',
            Setting_Static::STATIC_THREE => 'Đính hôn',
            Setting_Static::STATIC_FOUR => 'Đã kết hôn',
            Setting_Static::STATIC_FIVE => 'Đang tìm hiểu',
            Setting_Static::STATIC_SIX => 'Mối quan hệ phức tạp'
        ];
    }
    // hàm update time tụ động $create = 0 update lúc thêm dữ liệu mới , $create = 1  update dữ liệu
    static public function UpdateTime($name, $create = Setting_Static::STATIC_ZERO){
        if(isset($name) && $name){
            if($create == Setting_Static::STATIC_ZERO){
                $name->created_at = time();
                $name->updated_at = time();
                return [
                    $name->created_at = time(),
                    $name->updated_at = time()
                ];
            }
            else
            {
                $name->updated_at = time();
                return  $name->updated_at = time();
            }
        }
        else{
            return false;
        }
    }
    //Hàm gọi ảnh
    static  public function getImage($path ="",$name=""){
        if(isset($name) && $name){
            return Setting_Static::path_image.$path."/".$name;
        }
        return  "/static/default-image.jpg";


    }
    //hàm upload ảnh
    static  public function UploadImage($options,$path = ""){
        if(isset($options) && $options){
            $file= $options;
            $filename= time()."_".Str::random(5)."_".$file->getClientOriginalName();
            $file->move(public_path(Setting_Static::path_image. $path), $filename);
            return $filename;
        }
        return false;
    }

    static  function getStatusFriend()
    {
        return [
            Setting_Static::STATIC_ZERO =>'Đã gửi lời mời kết bạn',
            Setting_Static::STATIC_ONE =>'Đã là bạn bè',
            Setting_Static::STATIC_TWO => 'Theo dõi',
            Setting_Static::STATIC_THREE => 'Hủy kết bạn',
            Setting_Static::STATIC_FOUR=> 'Chặn'
        ];
    }

}
