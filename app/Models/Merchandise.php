<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $table = 'merchandise';

    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'image',
        'is_active',
        'stock_quantity',
        'size_options'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'size_options' => 'array'
    ];

    // Merchandise types
    const TYPES = [
        'home_kit' => 'Home Kit',
        'away_kit' => 'Away Kit',
        'third_kit' => 'Third Kit',
        'scarf' => 'Scarf',
        'cap' => 'Cap',
        'bag' => 'Bag',
        'accessory' => 'Accessory',
        'other' => 'Other'
    ];

    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->type] ?? ucfirst($this->type);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
