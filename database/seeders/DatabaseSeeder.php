<?php

namespace Database\Seeders;

use App\Models\Subscription;
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
        // running the seeders
        $this->call([
            UsersTableSeeder::class,
            WebsitesTableSeeder::class,
            PostsTableSeeder::class,
            SubscriptionsTableSeeder::class,
        ]);
    }
}
