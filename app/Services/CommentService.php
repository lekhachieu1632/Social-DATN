<?php

namespace App\Services;

use App\Models\Comment;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;


class CommentService {
    public function __construct(Comment $comment) {
        $this->model = $comment;
    }

    public function list($postId)
    {
        return $this->model->where('post_id', $postId)->orderBy('created_at', 'desc')->get();
    }

    public function create($request)
    {
        try {
            $comment = new Comment;

            $comment->user_id = session()->get(Setting_Static::KEY.'-id');
            $comment->post_id = $request['post_id'];
            $comment->content = $request['content_comment'];
            $comment->likes = 0;

            if (isset($request['image_comment'])) {
                $file = $request['image_comment'];
                $imagePath = $file->getClientOriginalName();
                $request['image_comment']->storeAs('public', $imagePath);
                $comment->image = $imagePath;
            } else {
                $comment->image = '';
            }
            $comment->save();
            return $comment;
        } catch (Exception $e) {
            report($e->getMessage());
            return "Tao khong thanh cong";
        }
    }

    public function find($id)
    {
        return $this->model::find($id);
    }

    public function update($request, $id)
    {
        try {
            $comment = Comment::find($id);
            $comment->content = $request['content_comment'];
            if (isset($request['image_comment'])) {
                $file = $request['image_comment'];
                $imagePath = $file->getClientOriginalName();
                $request['image_comment']->storeAs('public', $imagePath);
                $comment->image = $imagePath;
            } else {
                $comment->image = $request['edit-comment-image'];
            }
            $comment->update();
            return $comment;
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return "Tao khong thanh cong";
        }
    }

    public function destroy($id)
    {
        try {
            $post = Comment::find($id);
            $post->delete();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}
