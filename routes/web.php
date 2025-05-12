<?php

use App\Http\Controllers\PostsController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'home', 'data' => User::all()]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

// sedikit contoh menghubungkan ke controller
Route::get('/posts', [PostsController::class, 'index']);

// bingung
// post di {} di dapat dari nama class yang akan di bandingkan
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) .  ' Articles By' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Articles In' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});


