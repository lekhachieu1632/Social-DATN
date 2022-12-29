<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service\admin\UserAdminService;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function viewLoginAdmin(){
        if(!Session::get(Setting_Static::KEY.'-admin') ){
            return view('admin.auth.login');
        }
        else{
            return Redirect::route('dashboard');
        }
    }
    public function LoginAdmin(Request $request){
        $request->validate(Setting_Dynamic::rules(),Setting_Dynamic::messages());
        $data = UserAdminService::LoginUserAdmin($request->all());
        if($data){
            $request->session()->put(Setting_Static::KEY.'-username',$data->username);
            $request->session()->put(Setting_Static::KEY.'-admin',Setting_Static::KEY.'-'.$data->id);
            return Redirect::route('dashboard');
        }
        return back()->with('error', Setting_Static::ERROR_LOGIN);
    }

    function logoutAdmin(Request $request)
    {
        //Xoa toan bo session
        Session::flush();
        return Redirect::route('login-admin');
    }
}
