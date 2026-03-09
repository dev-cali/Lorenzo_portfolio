<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'email' => 'cssibrado@gmail.com',
            'phone' => '09953991715',
            'address' => 'Bacolod City',
            'facebook' => 'https://www.facebook.com/cassie.ibrado',
            'github' => 'https://github.com/dev-cali',
        ]);
    }
}