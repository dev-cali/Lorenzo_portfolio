<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'project_name' => 'Princess in the Clouds 2D Platformer',
                'description' => 'A 2D platformer game featuring a princess navigating through clouds.',
                'technologies' => 'Unity, C#',
                'github_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Sirens: Escape the Paranoia 3D Horror Maze',
                'description' => 'A 3D horror maze game where players must escape mutated arachnoids.',
                'technologies' => 'Unity, C#',
                'github_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}