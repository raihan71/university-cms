<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Social::create([
            'name' => 'youtube video-tour',
            'link' => 'https://www.youtube.com/watch?v=oxHLYE2cvO0',
        ]);
    }
}
