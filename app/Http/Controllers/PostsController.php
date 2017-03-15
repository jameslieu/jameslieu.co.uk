<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $posts)
    {
        return view('posts.index', compact('posts'));
    }
}
