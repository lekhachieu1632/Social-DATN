<?php


namespace App\Service\admin;


use App\Models\Banner;
use App\Models\GroupBanner;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\Log;

class GroupBannerService
{
    public function __construct(GroupBanner $groupBanner) {
        $this->model = $groupBanner;
    }
    static public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }

    static public function messages(){
        return [
            'name.required' => 'Tên nhóm banner không được để trống',
            'description.required' => 'Mô tả chi tiết không được để trống',
        ];
    }
    public function list($limit = Setting_Static::LIMIT){
        $data = GroupBanner::paginate($limit)->toArray();
        return $data;
    }
    public function create($request)
    {
        try {
            $groupBanner = new GroupBanner();
            $groupBanner->name = $request['name'];
            $groupBanner->description = $request['description'];
            Setting_Dynamic::UpdateTime($groupBanner,0);
            if ($groupBanner->save()) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return "Tao khong thanh cong";
        }
    }

    public function update($request,$id){
        try {
            $groupBanner = $this->model::find($id);
            $groupBanner->name = $request['name'];
            $groupBanner->description = $request['description'];
            Setting_Dynamic::UpdateTime($groupBanner,1);
            if ($groupBanner->save()) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return "Tao khong thanh cong";
        }
    }
    public function GetDataOne($id){
        $data = $this->model::find($id)->toArray();
        return $data;
    }
    public function delete($id){
        $data = GroupBanner::find($id);
        if($data->delete()){
            $banner = Banner::where('group_id',$id)->delete();
            if($banner)
            {
                return true;
            }
        }
        return false;

    }
}
