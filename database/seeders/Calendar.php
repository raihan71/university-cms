<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalendarAcademy;


class Calendar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calendarAcademy = [
            [
                'name' => 'Kalender Akademik 2024/2025',
                'description' => 'Kalender akademik untuk tahun ajaran 2024/2025 mencakup jadwal perkuliahan, ujian, dan libur.',
                'file' => 'kalender_akademik_2024_2025.pdf',
            ],
        ];

        CalendarAcademy::insert($calendarAcademy);
    }
}
