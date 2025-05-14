<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // untuk menjalankan eager loading deafult (disarankan)
    // with untuk melakukan eager loading, ('relasi mana yang mau di jalankan eager loading') relasi nya
    // harus sesuai dengan apa yang ada di model
    protected $with = ['author', 'category'];

    // penghubung antar table 
    public function author(): BelongsTo // banyak post mempunyai 1 user
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
}