<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    // $articles = Article::with(['author', 'category'])->latest()->get();
    $articles = Article::latest()->get();
    return view('blog', ['articles' => $articles]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $articles = $user->articles->load('author', 'category');
    return view('blog', ['articles' => $user->articles]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $articles = $category->articles->load('author', 'category');
    return view('blog', ['articles' => $category->articles]);
});

Route::get('/blog/{article:slug}', function (Article $article) {
    return view('single-post', ['article' => $article]);
});

Route::get('/contact', function () {
    return view('contact');
});
