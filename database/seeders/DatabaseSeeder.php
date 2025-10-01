<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'room' => 'A000',
            'phone' => '81234567890',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Password'),
            'remember_token' => Str::random(10),
        ]);

        Post::create([
            'user_id' => 1,
            'dateIn' => now(),
            'foodName' => 'Telur Ayam',
        ]);

        Post::create([
            'user_id' => 1,
            'dateIn' => now()->sub('day', 7),
            'foodName' => 'Daging Sapi',
        ]);
    }
}
