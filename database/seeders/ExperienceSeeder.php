<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::insert([
            [
                'role' => 'BS Computer Science',
                'company_or_school' => 'University of St. La Salle',
                'description' => 'Currently taking up Computer Science and learning software and web development.',
                'start_date' => '2023-08-01',
                'end_date' => null,
                'type' => 'Education',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Student Developer',
                'company_or_school' => 'Personal Projects',
                'description' => 'Developed academic and personal projects using web technologies.',
                'start_date' => '2024-01-01',
                'end_date' => null,
                'type' => 'Experience',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}