<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog', [
        'articles' => Article::all()
    ]);
});

Route::get('/blog/{article:slug}', function (Article $article) {
    return view('single-post', ['article' => $article]);
});

Route::get('/contact', function () {
    return view('contact');
});