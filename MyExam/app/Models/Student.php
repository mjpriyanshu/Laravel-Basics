<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rollno',
        'subject',
        'marks',
        'grade',
    ];

    protected $casts = [
        'marks' => 'integer',
    ];
}