<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/home',['title' => "Home"]);
});

Route::get('/about', function () {
    return view('/about', ["nama" => "Alif Fitrah", "title" => "About"]);
});

Route::get('/posts', function () {
    return view('/posts', ['title' => "Blog", 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Singel Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('/contact', ['title' => 'Contact']);
});