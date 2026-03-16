<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMB extends Model
{
    use HasFactory;

    protected $fillable = [
        'path_register',
        'date_register',
        'date_test',
        'date_result',
    ];
}
