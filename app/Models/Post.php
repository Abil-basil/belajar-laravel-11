<?php
namespace App\Models;

use illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // Arr::first = mencari elemen pertama yang ketemu berdasarkan kriteria tertentu
        // return Arr::first(static::all(), function ($post) use($slug) {
        //     return $post['slug'] == $slug;
        // });

        // bingung
        // penjelasan sementara : $post di dapat dari static::all yang di ubah
        // $post di kirim dari static::all
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}