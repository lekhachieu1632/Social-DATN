<?php

namespace App\Http\Controllers\admin\comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Services\CommentService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function  __construct(CommentService $commentService)
    {
        $this->comment = $commentService;
    }

    public function index(){
        $data = Comment::with('user','post')->orderBy('updated_at' , 'desc')->get()->toArray();

        return view('admin.comment.index',['data' => $data]);
    }
    public function delete($id){
        $data = $this->comment->destroy($id);
        if ($data){
            return back()->with('success' , Setting_Static::SUCCESS_DELETE);
        }
        return back()->with('error' , Setting_Static::ERROR_DELETE);


    }
}
