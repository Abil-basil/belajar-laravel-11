<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

// tugas 1

Route::get('/blog', function () {
    return view('blog', ['title' => 'blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});


