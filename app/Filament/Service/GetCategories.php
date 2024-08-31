<?php

namespace App\Filament\Service;

use \App\Models\Category;
class GetCategories
{
    public function index()
    {
        return Category::query()
            ->pluck('name', 'id')
            ->all();
    }
}
