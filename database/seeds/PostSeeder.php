<?php

use App\Models\Post\Post;
//
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Models\Post\Post::class, 50)->create()->each(function ($user) {
          // $user->posts()->save(factory(\App\Models\Post\Post::class)->make());
        });
    }
}
