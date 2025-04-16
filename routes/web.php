<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Postcontroller;
use App\Models\Post;

Route::get('/', [Homecontroller::class,'home'])->name('home');

Route::get('/posts', [Postcontroller::class,'index'])->name('posts.index');
Route::get('/posts/create', [Postcontroller::class,'create'])->name('posts.create');
Route::post('/posts', [Postcontroller::class,'store'])->name('posts.store');
Route::get('/posts/{post}', [Postcontroller::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [Postcontroller::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}', [Postcontroller::class,'update'])->name('posts.update');
Route::delete('/posts/{post}', [Postcontroller::class,'destroy'])->name('posts.destroy');

/*
// Crear las rutas de CRUD con una sola intruccion, deben estar declaradas en el Controlador
Route::resource('', Postcontroller::class)
->parameters(['articulos' => 'post']) // para que los parametros tengan un nombre distinto
->names('posts'); // para que los nombres tengan un nombre distinto
*/

Route::get('prueba', function(){
    /*
    // crear nuevo registro
    $post = new Post;
    $post->title = 'Titulo de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->category = 'Categoria de prueba 3';
    $post->save();
    return $post;
    */

    /*
    // actualizar registro
    $post = Post::where('title', 'Titulo de prueba')->first();
    $post->category = 'Desarrollo web';
    $post->save();
    return $post;
    */

    /*
    // listar todos los post
    $posts = Post::where('id', '>=','2') // filtrar
                    ->orderBy('category','asc') // ordenar 
                    ->select('id', 'title', 'category') // solo traer algunas columnas
                    ->take(1) //limitar 
                    ->get(); // obtener resultados
    return $posts;
    */

    /*
    // eliminar registro
    $post = Post::find(1);
    $post->delete(); 
    return 'Eliminado';
    */
});

/*Route::get('/posts/{post}/{category?}', function ($post, $category = null) { //el signo de interrogacion en la variable quiere decir que es opcional
    return "Aqui se mostrará el post {$post}";
});*/