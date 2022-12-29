<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserAdmin;
use App\Service\admin\UserAdminService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    public function index(Request $request)
    {
        $limit = isset($request->limit) && $request->limit ? $request->limit : Setting_Static::LIMIT;
        $page = isset($request->page) && $request->page ? (int)$request->page : Setting_Static::OFFSET;
        $data = UserAdminService::GetDataAll($limit, $page);
        $count = UserAdminService::GetDataAll($limit, $page, true);
        return view('admin.useradmin.index', ['data' => $data, 'end' => $limit, 'start' => $page, 'count' => $count]);
    }

    public function resetPassword($id)
    {
        $model = new UserAdminService();
        $data = $model->resetPassword($id);
        if ($data) {
            return back()->with('success', Setting_Static::SUCCSESS_UPDATE);
        }
        return back()->with('error', Setting_Static::ERROR_UPDATE);
    }

    public function add()
    {
        return view('admin.useradmin.add');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $validate = Validator::make($data, UserAdminService::rules(), UserAdminService::messages());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }
        $model = new UserAdminService();
        if ($model->addUserAdmin($request->all())) {
            return Redirect::route('useradmin-index')->with('success', Setting_Static::SUCCSESS_CREATE);

        }
        return back()->with('error', Setting_Static::ERROR_CREATE);
    }

    public function edit($id)
    {
        $models = new UserAdminService();
        $data = $models->GetDataOne($id);
        return view('admin.useradmin.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $models = new UserAdminService();
        $data = $models->updateUserAdmin($request->all(), $id);
        if ($data) {
            return Redirect::route('useradmin-index')->with('success', Setting_Static::SUCCSESS_UPDATE);
        }
        return back()->with('error', Setting_Static::ERROR_UPDATE);
    }

    public function delete($id)
    {
        $model = new  UserAdminService();
        $data = $model->deleteUserAdmin($id);
        if ($data) {
            return back()->with('success', Setting_Static::SUCCESS_DELETE);
        }
        return back()->with('error', Setting_Static::ERROR_DELETE);
    }

    public function Load_API()
    {
        $limit = isset($request->limit) && $request->limit ? $request->limit : Setting_Static::LIMIT;
        $page = isset($request->page) && $request->page ? (int)$request->page : Setting_Static::OFFSET;
        $model = UserAdminService::GetDataAll($limit,$page);
        $model_count = UserAdminService::GetDataAll($limit,$page,true);
      //  $model_count = UserAdminService::GetDataAll($limit,$page,true);


        return response()->json([
            'draw' => $_GET['draw'],
            'recordsTotal' => $model_count,
            'recordsFiltered' => $model_count,
            'data' => $model,
        ]);

        echo "<pre>";
        print_r($model);
        echo "</pre>";
        die();
    }
}
