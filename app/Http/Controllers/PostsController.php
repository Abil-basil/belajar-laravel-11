<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        // get artinya kita mau menambahkan sesuatu di depan nya
        // jika ingin menambahkan sesuatu di dalam query harus di akhri get agar query di eksekusi


        return view('posts', ['title' => 'blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()]);
    }
}
