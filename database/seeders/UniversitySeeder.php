<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $university = [
            [
                'name' => 'Tech University',
                'location' => '123 Tech Lane, Innovation City',
                'logo' => 'tech_university_logo.png',
                'description' => 'A leading institution in technology and innovation.',
                'phone' => '123-456-7890',
                'email' => 'info@techuniversity.edu',
                'history' => 'Founded in 2000, Tech University has been at the forefront of technological education.',
                'vision' => 'To be a global leader in technology education and research.',
                'mission' => 'To provide high-quality education and foster innovation in technology.',
                'accreditation' => 'Accredited by the Technology Accreditation Board.',
                'identity' => 'Tech University is known for its cutting-edge research and diverse student body.',
                'structure' => 'Composed of various faculties including Engineering, Computer Science, and Business.',
                'count_teacher' => '120',
                'count_student' => '1500',
                'count_alumni' => '5000',
                'count_program' => '30',
            ],
        ];

        University::insert($university);
    }
}
