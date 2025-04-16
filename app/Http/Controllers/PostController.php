<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')
                ->paginate(12);
        return view("posts/index", [
            "posts"=> $posts,
        ]);
    }

    public function create()
    {
        return view("posts/create");
    }

    public function store(Request $request){

        $request->validate(
            [
                "title"     => "required|min:5|max:255",
                "slug"      => "required|unique:posts",
                "category"  => "required",
                "content"   => "required",
            ],
            [
                //"title.required" => "El título no puede estar vacío, po compadre.",
                //"title.min" => "El título debe tener al menos :min caracteres.",
            ], // puedes definir mensajes personalizados aquí si quieres
            [
                "title"    => "Title",
                "slug"     => "Slug",
                "category" => "Category",
                "content"  => "Content",
            ]
        );

        $post = new Post();
        $post->title    = $request->title;
        $post->slug     = $request->slug;
        $post->category = $request->category;
        $post->content  = $request->content;

        $post->save();

        return redirect()->route('posts.index');
        
    }
    public function show(Post $post)
    {
        //compact ('post') es igual a ['post' => $post]
        return view("/posts/show", compact('post'));
    }

    public function edit(Post $post){
        return view("/posts.edit", compact('post'));
    }

    public function update(Request $request,Post $post){
        //return $request;

        $request->validate(
            [
                "title"     => "required|min:5|max:255",
                "slug"      => "required|unique:posts,slug,{$post->id}",
                "category"  => "required",
                "content"   => "required",
            ]
        );
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('posts.index');
    }
}
