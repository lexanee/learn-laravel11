<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('single-post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});