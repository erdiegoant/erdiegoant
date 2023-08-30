<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SiteSettings;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Diego Barrera',
            'email' => 'erdiegoant@gmail.com',
            'password' => bcrypt('TFNAmHiHuAW8io4o^V'),
        ]);

        SiteSettings::factory()->create([
            'title' => 'Diego Barrera',
            'description' => 'I am a Full-Stack Software Developer in love with Laravel and Flutter.',
            'content' => [
                ['text' => 'Hey! I\'m Diego, a full-stack software developer from Colombia. I primarily work with Laravel, MySQL or PostgreSQL and various technologies on the frontend, such as Vue and React.'],
                ['text' => 'I\'ve been working for the past 7+ years as a software developer, and I\'ve been using Laravel since I started working. I\'ve worked on a variety of projects, from small to large, always striving to do my best and keep learning as I go. I\'ve also worked with other PHP frameworks, such as CodeIgniter and in-house frameworks, but Laravel is my favorite by far, and I love every moment I work with it.'],
                ['text' => 'I\'ve also worked as a mobile developer using the Flutter framework, and I\'ve been using it for the past 2 years. Mobile development is something of a passion project for me and something I always wanted to do, which is why I\'m always looking for new opportunities to work with it.'],
            ],
        ]);
    }
}
