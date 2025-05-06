<?php

use App\Models\User;
use App\Models\Post;
use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'home', 'data' => User::all()]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => Post::all()]);
});

// bingung
// post di {} di dapat dari nama class yang akan di bandingkan
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles By' . $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});


