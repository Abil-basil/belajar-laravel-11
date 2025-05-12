<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // shortcut dari php artisan tinker 
        // php artisan db:seed / php artisan migrate:fresh --seed

        // User::factory(10)->create();

        // cara yang di pisah pisah
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(15)->recycle([
            Category::all(),
            User::all()
        ])->create();

        // biasanya menggunakan ini
        // Post::factory(15)->recycle([
        //     User::factory(3)->create(),
        //     Category::factory(4)->create()
        // ])->create();
        

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
