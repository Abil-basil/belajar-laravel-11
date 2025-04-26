<?php

use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'ahay',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, distinctio sapiente? Numquam non doloremque illo sint, laboriosam adipisci quia ipsum vel molestias quo consectetur, facilis tempora veritatis repudiandae, nostrum pariatur!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'ahay',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quo iusto molestias nostrum repellendus ea, quam quae sunt necessitatibus at nihil totam expedita molestiae enim vitae harum officia nesciunt dicta!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'ahay',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, distinctio sapiente? Numquam non doloremque illo sint, laboriosam adipisci quia ipsum vel molestias quo consectetur, facilis tempora veritatis repudiandae, nostrum pariatur!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'ahay',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quo iusto molestias nostrum repellendus ea, quam quae sunt necessitatibus at nihil totam expedita molestiae enim vitae harum officia nesciunt dicta!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});


