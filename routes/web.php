<?php

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
        'posts' => [
            [
                'id' => 1,
                'title' => 'Getting Started with Laravel 11',
                'slug' => 'getting-started-laravel-11',
                'author' => 'John Doe',
                'body' => 'Laravel 11 introduces several new features, including improved performance, updated routing, and enhanced security. In this article, we will explore how to set up a new Laravel 11 project and take advantage of its latest capabilities.',
                'publish_date' => '2025-02-21',
            ],
            [
                'id' => 2,
                'title' => 'Understanding Tailwind CSS 4',
                'slug' => 'understanding-tailwind-css-4',
                'author' => 'Jane Smith',
                'body' => 'Tailwind CSS 4 comes with exciting updates like better performance, extended utility classes, and improved dark mode support. This guide will help you understand how to integrate Tailwind 4 into your Laravel project.',
                'publish_date' => '2025-02-20',
            ],
            [
                'id' => 3,
                'title' => 'Building a REST API with Laravel',
                'slug' => 'building-rest-api-laravel',
                'author' => 'Michael Johnson',
                'body' => 'RESTful APIs are essential for modern web applications. This tutorial walks you through building a robust API using Laravel, covering authentication, CRUD operations, and best practices for structuring your API endpoints.',
                'publish_date' => '2025-02-19',
            ],
        ]
    ]);
});

Route::get('/blog/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Getting Started with Laravel 11',
            'slug' => 'getting-started-laravel-11',
            'author' => 'John Doe',
            'body' => 'Laravel 11 introduces several new features, including improved performance, updated routing, and enhanced security. In this article, we will explore how to set up a new Laravel 11 project and take advantage of its latest capabilities.',
            'publish_date' => '2025-02-21',
        ],
        [
            'id' => 2,
            'title' => 'Understanding Tailwind CSS 4',
            'slug' => 'understanding-tailwind-css-4',
            'author' => 'Jane Smith',
            'body' => 'Tailwind CSS 4 comes with exciting updates like better performance, extended utility classes, and improved dark mode support. This guide will help you understand how to integrate Tailwind 4 into your Laravel project.',
            'publish_date' => '2025-02-20',
        ],
        [
            'id' => 3,
            'title' => 'Building a REST API with Laravel',
            'slug' => 'building-rest-api-laravel',
            'author' => 'Michael Johnson',
            'body' => 'RESTful APIs are essential for modern web applications. This tutorial walks you through building a robust API using Laravel, covering authentication, CRUD operations, and best practices for structuring your API endpoints.',
            'publish_date' => '2025-02-19',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('single-post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
