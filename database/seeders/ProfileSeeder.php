<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Cassandra Remedios I. Lorenzo',
            'title' => 'BS Computer Science Student',
            'bio' => 'I am a passionate student interested in game design and software development.',
            'profile_image' => null,
        ]);
    }
}