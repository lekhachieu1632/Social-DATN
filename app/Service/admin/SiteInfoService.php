<?php


namespace App\Service\admin;

use App\Models\SiteInfo;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;

class SiteInfoService
{
    const id = Setting_Static::STATIC_ONE;
    static public function rules()
    {
        return [
            'name' => 'required',
            'title' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    static public function messages(){
        return [
            'name.required' => 'Tên website không được để trống',
            'avatar.required' => 'Ảnh đại diện không được để trống',
            'avatar.image' => 'Không đúng định dạng.',
            'avatar.mimes' => 'Định dạng không hợp lệ. Định dạng được phép(jepg,png,jpg,svg)',
            'avatar.max' => 'Tệp tin quá lớn, đăng tệp nhỏ lại. Không quá 2MB',
            'title.required' => 'Tiêu đề website',
            'favicon.required' => 'Favicon không được để trống',
            'favicon.mimes' => 'Định dạng không hợp lệ. Định dạng được phép(jepg,png,jpg)',
            'favicon.max' => 'Tệp tin quá lớn, đăng tệp nhỏ lại. Không quá 1MB',
            'favicon.image' => 'Không đúng định dạng.',
        ];
    }

    public function AddorUpdate($request){
        $data= SiteInfo::find(self::id);
        if(!$data){
            $data = new SiteInfo();
            Setting_Dynamic::UpdateTime($data,0);
        }
        else{
            Setting_Dynamic::UpdateTime($data, 1);
        }
        $data->name = $request['name'];
        $data->title = $request['title'];
        $data->path = Setting_Static::path_site_info;
        $data->avatar = isset($request['name_avatar']) && $request['name_avatar'] ? $request['name_avatar'] : $data->avatar;
        $data->favicon =  isset($request['name_favicon']) && $request['name_favicon'] ? $request['name_favicon'] : $data->favicon;
        $data->content = $request['content'];
        $data->description = $request['description'];
        $data->coppyright = $request['coppyright'];
        if($data->save())
        {
            return true;
        }
        return false;

    }
    static public function getData(){
        $data = SiteInfo::find(self::id);
        return $data;
    }
}
