<?php


namespace App\Http\Controllers\admin\site_info;


use App\Http\Controllers\Controller;

use App\Service\admin\SiteInfoService;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
        public function index(){
            $model= SiteInfoService::getData();
            if(isset($model) && $model){
                return view('admin.siteinfo.index',['data' => $model]);
            }
            return view('admin.siteinfo.index');
        }

        public function update(Request $request){
            $data= $request->all();
            $validate= Validator::make($data, SiteInfoService::rules(), SiteInfoService::messages());
            if($validate->fails()) {
                return back()->withInput()->withErrors($validate);
            }
            $data['name_avatar'] = isset($data['avatar']) && $data['avatar'] ? Setting_Dynamic::UploadImage($data['avatar'],Setting_Static::path_site_info) : '';
            $data['name_favicon'] = isset($data['favicon']) && $data['favicon'] ? Setting_Dynamic::UploadImage($data['favicon'],Setting_Static::path_site_info) : "";
            if($data){
                $model= new SiteInfoService();
                if($model->AddorUpdate($data)){
                    return Redirect::route('site-info-index')->with('success',Setting_Static::SUCCSESS_UPDATE);
                }
            }
            return back()->withInput()->withErrors('error', Setting_Static::ERROR_UPDATE);


        }
}
