<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Service\Article\GetArticle;
use App\Service\Article\getArticles;
use App\Service\Article\GetPopular;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function popular()
    {
        return (new GetPopular())->index();
    }
    public function show($id)
    {
        return (new GetArticle())->index($id);
    }

    public function show_paginate(Request $request)
    {
        return (new getArticles())->index($request);
    }
}
