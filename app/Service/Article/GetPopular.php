<?php

namespace App\Service\Article;

use App\Models\Category;

class GetPopular
{
    public function index(){
        $categories = Category::with(['articles' => function ($query) {
            $query->limit(3);
        }])->withCount('articles')
            ->orderBy('articles_count', 'desc')
            ->limit(3)
            ->get();
        return response()->json($categories);
    }
}
