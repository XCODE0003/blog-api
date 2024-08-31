<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/categories/popular', [ArticleController::class, 'popular']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/articles/paginate', [ArticleController::class, 'show_paginate']);
Route::post('/comment/add', [CommentController::class, 'add']);
