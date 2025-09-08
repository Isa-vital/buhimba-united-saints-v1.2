<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'shirt_number',
        'position',
        'date_of_birth',
        'nationality',
        'biography',
        'photo',
        'height',
        'weight',
        'preferred_foot',
        'social_media',
        'appearances',
        'goals',
        'assists',
        'yellow_cards',
        'red_cards',
        'minutes_played',
        'is_active',
        'joined_date',
        'contract_end',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joined_date' => 'date',
        'contract_end' => 'date',
        'social_media' => 'array',
        'is_active' => 'boolean',
        'height' => 'decimal:2',
        'weight' => 'decimal:2',
    ];

    // Accessors
    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->date_of_birth ? $this->date_of_birth->age : null,
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => "{$this->first_name} {$this->last_name}",
        );
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByPosition($query, $position)
    {
        return $query->where('position', $position);
    }

    public function scopeTopScorers($query, $limit = 10)
    {
        return $query->orderBy('goals', 'desc')->limit($limit);
    }
}
