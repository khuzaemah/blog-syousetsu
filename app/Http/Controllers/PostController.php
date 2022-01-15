<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::latest()->get()
        ]);
    }

    // public function show($slug){
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug) //titikdua2 = static di model
    //     ]);
    // }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}