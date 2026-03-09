<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::insert([
            [
                'skill_name' => 'C#',
                'proficiency' => 'Intermediate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'HTML',
                'proficiency' => 'Advanced',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'CSS',
                'proficiency' => 'Intermediate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Bootstrap',
                'proficiency' => 'Beginner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Laravel',
                'proficiency' => 'Beginner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}