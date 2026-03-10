<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityCategory extends Model
{
    use HasFactory;

    public static function getCategoryOptions()
    {
        return [
            ['value' => 'fasilitas_umum', 'label' => 'Fasilitas Umum'],
            ['value' => 'ruang_kuliah', 'label' => 'Ruang Kuliah'],
            ['value' => 'laboratorium', 'label' => 'Laboratorium'],
            ['value' => 'perpustakaan', 'label' => 'Perpustakaan'],
        ];
    }
}
