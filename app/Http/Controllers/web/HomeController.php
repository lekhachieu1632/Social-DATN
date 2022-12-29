<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use App\Setting\Setting_Static;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $postService;
    protected $post;

    public function __construct(
        PostService $postService,
        Post $post)
    {
        $this->postService = $postService;
        $this->post = $post;
    }

    public function viewHome(Request $request)
    {
        $keyword = $request['postSearch'];

        $posts = $this->post->query()
//            ->where(function ($query) use ($keyword) {
//                $query->where('id', $keyword);})
            ->orderBy('created_at', 'desc')->get();
        return view('frontend.home.index')
            ->with([
                'posts' => $posts
            ]);
    }
}
