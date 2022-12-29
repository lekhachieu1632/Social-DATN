<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Service\admin\UserAdminService;
use App\Service\admin\UserService;
use App\Setting\Setting_Dynamic;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Http\Request;

class AuthController extends Controller
{
//    use AuthenticatesUsers;

//    protected  $redirectTo = '/home';

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
//        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        if(!Session::get(Setting_Static::KEY.'-user') ){
            return view('frontend.auth.login');
        }
        else{
            return Redirect::route('home');
        }
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function RequestRegister(Request $request){
        $data = $request->all();
        $validate= Validator::make($data, \App\Services\UserService::rules(), \App\Services\UserService::messages());
        if($validate->fails()) {
            return  back()->withInput()->withErrors($validate);
        }

        $model= new \App\Services\UserService();
        $model = $model->register($data);
        if ($model){
            return  Redirect::route('login');
        }
        return back()->with('error', Setting_Static::ERROR_CREATE);
    }

    public function getLogin()
    {
        if(!Session::get(Setting_Static::KEY.'-user') ){
            return view('frontend.auth.login');
        }
        else{
            return Redirect::route('home');
        }
    }


    public function postLogin(Request $request)
    {
        //$request->validate(Setting_Dynamic::rules(),Setting_Dynamic::messages());
        $data = $request->all();
        $model = $this->userService::Login($data);
        if($model){
            $request->session()->put(Setting_Static::KEY.'-id',$model->id);
            $request->session()->put(Setting_Static::KEY.'-user',Setting_Static::KEY.'-'.$model->id);
            return Redirect::route('home');
        }
        return back()->withInput()->with('error', Setting_Static::ERROR_LOGIN);

    }
//
//    /**
//     * action admincp/logout
//     * @return RedirectResponse
//     */
    public function getLogout()
    {
        Session::flush();
        return Redirect::route('login');
    }
}

