<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Service\Comment\AddComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add(CommentRequest $request)
    {
        return (new AddComment())->index($request);
    }
}
