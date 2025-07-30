<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(13)->create();
        User::factory(13)->create();

        $this->call(AdminUserSeeder::class);

        // TODO Seed more items
    }
}
