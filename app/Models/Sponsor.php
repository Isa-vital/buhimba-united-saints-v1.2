<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'website',
        'email',
        'phone',
        'description',
        'contract_start',
        'contract_end',
        'sponsorship_amount',
        'is_active',
    ];

    protected $casts = [
        'contract_start' => 'date',
        'contract_end' => 'date',
        'sponsorship_amount' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
