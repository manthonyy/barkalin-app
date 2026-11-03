<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPartner extends Model
{
    /** @use HasFactory<\Database\Factories\ClientPartnerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'industry',
        'sort_order',
        'active',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'active' => 'boolean',
    ];
}
