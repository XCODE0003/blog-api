<?php

namespace App\Service\Article;

use App\Models\Article;

class GetArticle
{
    public function index($id)
    {
        $article = Article::with('category')->with('comments')->find($id);
        return response()->json($article);
    }
}
