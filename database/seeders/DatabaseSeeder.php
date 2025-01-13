<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Setting::create([
            'about_title' => 'Software Engineer',
            'about_description' => 'Data and Backend enthusiast',
            'fb_url' => '#li',
            'github_url' => '#li',
            'linkedin_url' => '#li',
            'freelance_url' => '#li',
            'cv_url' => '#cv',
            'video_url' => '#video'
        ]);
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Bivek Shrestha ',
            'email' => 'bivek@gmail.com',
        ]);
    }
}
