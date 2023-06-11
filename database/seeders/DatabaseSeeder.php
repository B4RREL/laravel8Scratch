<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Catergory;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Catergory::truncate();
        // Post::truncate();

        // $user = \App\Models\User::factory()->create();

        Post::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $personal = Catergory::create([
        //     "name" => "Personal",
        //     "slug" => "personal",
        // ]);

        // $work = Catergory::create([
        //     "name" => "Work",
        //     "slug" => "work",
        // ]);

        // $family = Catergory::create([
        //     "name" => "Family",
        //     "slug" => "family",
        // ]);

        // Post::create([
        //     "title" => "My Post",
        //     "user_id" => $user->id,
        //     "catergory_id" => $personal->id,
        //     "slug" => "my-post",
        //     "excerpt" => "lorem ipsum dolor sit amet lore maur convallis dolore magna aliquet",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco",
        // ]);

        // Post::create([
        //     "title" => "My Work Post",
        //     "user_id" => $user->id,
        //     "catergory_id" => $work->id,
        //     "slug" => "my-work-post",
        //     "excerpt" => "lorem ipsum dolor sit amet lore maur convallis dolore magna aliquet",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco",
        // ]);
    }
}
