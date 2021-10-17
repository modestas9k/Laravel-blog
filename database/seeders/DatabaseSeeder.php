<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory()->create([
            'name' => 'Mode'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);



        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'exerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, deleniti maiores ex obcaecati architecto ab quo cupiditate. Quidem fugit unde tenetur corrupti quae eaque quasi cumque placeat consequuntur odit sed, doloremque incidunt rem, cum amet atque, repudiandae blanditiis ea tempore? Repellendus, distinctio. Accusamus perspiciatis cupiditate quia maxime, tempore iure accusantium voluptates veniam quod doloribus adipisci. Obcaecati doloremque quis mollitia quam nobis autem eveniet labore adipisci earum voluptate distinctio, nulla, accusantium officiis! Reprehenderit voluptas voluptatibus aut, adipisci excepturi voluptate voluptates corporis aliquid totam optio, qui consectetur tenetur ducimus temporibus hic eos labore vero quisquam sit! Earum architecto provident quos exercitationem molestias!</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'exerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, deleniti maiores ex obcaecati architecto ab quo cupiditate. Quidem fugit unde tenetur corrupti quae eaque quasi cumque placeat consequuntur odit sed, doloremque incidunt rem, cum amet atque, repudiandae blanditiis ea tempore? Repellendus, distinctio. Accusamus perspiciatis cupiditate quia maxime, tempore iure accusantium voluptates veniam quod doloribus adipisci. Obcaecati doloremque quis mollitia quam nobis autem eveniet labore adipisci earum voluptate distinctio, nulla, accusantium officiis! Reprehenderit voluptas voluptatibus aut, adipisci excepturi voluptate voluptates corporis aliquid totam optio, qui consectetur tenetur ducimus temporibus hic eos labore vero quisquam sit! Earum architecto provident quos exercitationem molestias!</p>'
        // ]);
    }
}
