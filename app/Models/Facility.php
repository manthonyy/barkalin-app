<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    /** @use HasFactory<\Database\Factories\FacilityFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'title',
        'image',
        'reverse',
        'description',
        'active',
    ];

    protected $casts = [
        'reverse' => 'boolean',
        'active' => 'boolean',
    ];
}
