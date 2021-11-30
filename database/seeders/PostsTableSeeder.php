<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncating the table to start from scratch
        Post::truncate();

        Post::factory()
            ->count(50)
            ->create();
    }
}
