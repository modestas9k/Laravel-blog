<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        $categories = Category::all();

        Post::factory()->count(10)->create([
            'user_id' => $user->id,
            'category_id' => function () use ($categories) {
                return $categories->random()->id;
            },
        ]);
    }
}
