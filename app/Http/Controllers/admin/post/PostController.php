<?php


namespace App\Http\Controllers\admin\post;

use App\Services\PostService;
use App\Setting\Setting_Static;

class PostController
{
    protected $postService;

    public function __construct(PostService $postService)
    {

        $this->postService = $postService;
    }

    public function index(){
        $data = $this->postService->getData();

        return view('admin.post.index',['data' => $data]);
    }
    public function delete($id){
        $data = $this->postService->destroy($id);
        if ($data){
            return back()->with('success' , Setting_Static::SUCCESS_DELETE);
        }
        return back()->with('error' , Setting_Static::ERROR_DELETE);

    }

}
