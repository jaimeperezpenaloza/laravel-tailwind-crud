<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $posts = Post::orderBy('id','desc')
                ->take(6)
                ->get();
        return view("home", [
            "posts"=> $posts,
        ]);
    }
}
