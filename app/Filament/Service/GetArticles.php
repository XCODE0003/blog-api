<?php

namespace App\Filament\Service;

use App\Models\Article;

class GetArticles
{
    public function index()
    {
        return Article::query()
            ->pluck('title', 'id')
            ->all();
    }
}
