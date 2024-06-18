<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('authors', [
            "title" => 'Author',
            "authors" => User::all()
        ]);
    }
    public function show(User $author)
    {
        return view('posts', [
            "title" => "Post By : $author->name",
            "posts" => $author->posts->load('category','user')
        ]);
    }
}
