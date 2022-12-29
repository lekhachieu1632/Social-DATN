<?php

namespace App\Services;

use App\Http\Requests\PostRequest;
use App\Models\Like;
use App\Models\Post;
use App\Setting\Setting_Static;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use Exception;
use Illuminate\Support\Facades\Log;


class PostService {
    protected $post;
    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function list($idUser)
    {
        $keyword = '';

        return $this->post
            ->where(function ($query) use ($keyword) {
                $query->where('id', 'like', "%$keyword%");
            })->where('location_post', $idUser)->orderBy('created_at', 'desc')->get();
    }

    public function create($request)
    {
        try {
            $post = new Post;
            $post->user_id = session()->get(Setting_Static::KEY.'-id');
            $post->location_post = $request['id_location'];
            $post->content = $request['content_post'];
            $post->likes = 0;
            if (isset($request['image_post'])) {
                $file = $request['image_post'];
                $imagePath = $file->getClientOriginalName();
                $request['image_post']->storeAs('public', $imagePath);
                $post->image = $imagePath;
            } else {
                $post->image = '';
            }
            $post->save();
            return $post;
        } catch (Exception $e) {
            return "Tao khong thanh cong";
        }
    }

    public function find($id)
    {
        return $this->post::find($id);
    }

    public function update($request, $id)
    {
        try {
            $post = Post::find($id);
            $post->content = $request['content_post'];
            $post->likes = 0;
            if (isset($request['image_post'])) {
                $file = $request['image_post'];
                $imagePath = $file->getClientOriginalName();
                $request['image_post']->storeAs('public', $imagePath);
                $post->image = $imagePath;
            } else {
                $post->image = $request['edit-post-image'];
            }
            $post->save();
            return $post;
        } catch (Exception $e) {
            return "Cap nhat khong thanh cong";
        }
    }

    public function destroy($id)
    {
        try {
            $post = Post::find($id);
            $post->delete();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return 'xoa that bai';
        }
    }

    public function getData(){
        $data = $this->model->with('user','userFriend')->get()->toArray();
        return $data;
    }

    public function like($id)
    {
        try {
            $like = new Like;
            $like->user_id = session()->get(Setting_Static::KEY.'-id');
            $like->post_id = $id;
            $like->save();

            $post = Post::find($id);
            $post->likes = $post->likes + 1;
            $post->save();
        } catch (Exception $e) {
            return false;
        }
    }

    public function unlike($request, $id)
    {

        try {
            $like = Like::find($id);
            $like->delete();

            $post = Post::find($request['post_id']);
            $post->likes = $post->likes - 1;
            $post->save();
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}
