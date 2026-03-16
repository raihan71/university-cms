<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PMBDetails;

class PMBDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PMBDetails::create([
            'file' => 'file1.pdf',
            'description' => 'Deskripsi file 1',
            'gambar' => 'gambar1.jpg',
        ]);
    }
}
