<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(CommentRequest $request)
    {
        return $this->commentService->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $comment = $this->commentService->update($request->all(), $id);
        if ($comment) {
            return response()->json([
                'status' => 200,
                'comment' => $comment,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Comment Not Found',
            ]);
        }
    }

    public function destroy($id)
    {
        $this->commentService->destroy($id);
    }
}
