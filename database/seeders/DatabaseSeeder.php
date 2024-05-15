<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Interviewee;
use App\Models\Podcast;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SocialMediaSeeder;
use Database\Seeders\CategoryIntervieweeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Interviewee::factory(5)->create();
        Podcast::factory(5)->create();

         $this->call([
            CategoryIntervieweeSeeder::class,
            IntervieweeSocialmediaSeeder::class,
            SocialMediaSeeder::class
        ]);
      
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
