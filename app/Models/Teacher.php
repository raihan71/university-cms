<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'photo',
        'bio',
        'phone',
        'address',
        'prodi',
        'subject',
        'linkedin',
        'twitter',
        'instagram',
        'facebook',
        'website',
        'role',
        'slug',
    ];
}
