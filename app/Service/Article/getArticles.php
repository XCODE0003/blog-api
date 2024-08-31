<?php

namespace App\Service\Article;

use App\Models\Article;

class getArticles
{

    public function index($request)
    {
        $search = $request->search;
        $category = $request->category;

        $articles = Article::with('category')
            ->withCount('comments')
            ->orderBy('created_at', 'desc');

        if ($search != 'null') {
            $articles = $articles->where('title', 'like', '%' . $search . '%');
        }
        if ($category != 'null') {
            $articles = $articles->where('category_id', $category);
        }

        $articles = $articles->paginate(5);

        return response()->json($articles);
    }
}
