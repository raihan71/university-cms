<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'logo',
        'description',
        'phone',
        'email',
        'history',
        'vision',
        'mission',
        'accreditation',
        'identity',
        'structure',
        'count_teacher',
        'count_student',
        'count_alumni',
        'count_program',
    ];
}
