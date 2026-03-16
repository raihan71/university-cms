<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCategory extends Model
{
    use HasFactory;

    public static function getCategories()
    {
        return [
            ['value' => 'ukt', 'label' => 'UKT Mahasiswa Reguler'],
            ['value' => 'pmb', 'label' => 'Biaya Pendaftaran PMB'],
            ['value' => 'umum', 'label' => 'Transfer Umum'],
            ['value' => 'donasi', 'label' => 'Donasi/Zakat'],
        ];
    }
}
