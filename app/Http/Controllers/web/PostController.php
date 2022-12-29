<?php

namespace App\Http\Controllers\web;

use App\Http\Requests\PostRequest;
use App\Models\User;
use App\Services\CommentService;
use App\Services\PostService;
use App\Services\ProfileUserService;
use App\Setting\Setting_Static;

class PostController extends AppBaseController
{
    protected $postService;
    protected $commentService;
    protected $user;

    public function __construct(
        PostService $postService,
        CommentService $commentService,
        ProfileUserService $profileUserService)
    {
        $this->postService = $postService;
        $this->commentService = $commentService;
        $this->user = $profileUserService;
    }

    public function list($idUser)
    {
        $user = User::find($idUser);
        $posts = $this->postService->list($idUser);
        return view('frontend.profile.post')
            ->with([
                'posts' => $posts,
                'user' => $user
            ]);
    }

    public function store(PostRequest $request)
    {
        $this->postService->create($request->all());
    }

    public function edit($idUser, $id)
    {
        $post = $this->postService->find($id);
        return response()->json([
            'content' => view('frontend.post.update')
                ->with([
                    'post' => $post,
                ])
                ->render(),
            'status' => 200
        ]);

    }

    public function update($idUser, $id, PostRequest $request)
    {
        $post = $this->postService->update($request->all(), $id);
        if ($post) {
            return response()->json([
                'status' => 200,
                'post' => $post,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Post Not Found',
            ]);
        }
    }

    public function destroy($idUser, $id)
    {
        $this->postService->destroy($id);
    }

    public function detail($idUser, $id)
    {
        $user = User::find($idUser);
        $post = $this->postService->find($id);
        $comments = $this->commentService->list($id);
        return view('frontend.post.detail',[
            'post' => $post,
            'comments' => $comments,
            'user' => $user,
        ]);
    }

    public function like($idUser, $id)
    {
        $this->postService->like($id);
    }

    public function unlike(PostRequest $request, $idUser, $id)
    {
        $this->postService->unlike($request->all(), $id);
    }
}
