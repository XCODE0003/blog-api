<?php

namespace App\Service\Comment;

use App\Models\Comment;

class AddComment
{
    public function index($request)
    {
        $article_id = $request->article_id;
        $name = $request->name;
        $message = $request->message;
        $comment = Comment::query()->create([
            'article_id' => $article_id,
            'name' => $name,
            'message' => $message,
        ]);

        return response()->json(['success' => true, 'data' => $comment]);
    }
}
