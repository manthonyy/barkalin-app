<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoalGrade extends Model
{
    /** @use HasFactory<\Database\Factories\CoalGradeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'subtitle',
        'calorific_value',
        'description',
        'image',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
