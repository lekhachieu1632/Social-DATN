<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\UserAdmin;
use Illuminate\Routing\Route;

class DashboardController extends Controller
{
    public function index(){
        $count_admin = UserAdmin::get();
        $count_user = User::get();
        $count_post = Post::get();
        $count_comment = Comment::get();
        return view('admin.dashboard.dashboard',
            [
                'admin_count' => count($count_admin),
                'count_user' =>count($count_user),
                'count_post' => count($count_post),
                'count_comment' => count($count_comment)
            ]);
    }
}

