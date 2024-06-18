<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('categories/{category:slug}',[CategoryController::class, 'show']);
Route::get('author/{author:username}',[UserController::class, 'show']);
Route::get('/categories',[CategoryController::class, 'index']);
Route::get('/authors', [UserController::class, 'index']);
