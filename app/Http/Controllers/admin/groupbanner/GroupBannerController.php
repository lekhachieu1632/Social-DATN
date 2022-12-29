<?php

namespace App\Http\Controllers\admin\groupbanner;

use App\Http\Controllers\Controller;

use App\Service\admin\GroupBannerService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GroupBannerController extends Controller
{
    public function __construct(GroupBannerService $groupBannerService)
    {
        $this->groupbaner= $groupBannerService;
    }

    public function index(){
        $data = $this->groupbaner->list();
        return view('admin.groupbanner.index',['data' => $data['data']]);
    }

    public function add(){
        return view('admin.groupbanner.add');
    }
    public function create(Request $request){
        $data = $request->all();

        $validate= Validator::make($data, GroupBannerService::rules(), GroupBannerService::messages());
        if($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        if($this->groupbaner->create($data))
        {
            return Redirect::route('group_banner-index')->with('success',Setting_Static::SUCCSESS_CREATE);
        }
        return back();
    }
    public function edit($id){
        $data= $this->groupbaner->GetDataOne($id);
        return view('admin.groupbanner.edit',['data' =>$data]);
    }
    public function update(Request $request,$id){
        $data = $this->groupbaner->update($request->all(),$id);
        if($data){
            return Redirect::route('group_banner-index')->with('success',Setting_Static::SUCCSESS_UPDATE);
        }
        return back()->with('error',Setting_Static::ERROR_UPDATE);

    }

    public function delete($id){

    }
}
