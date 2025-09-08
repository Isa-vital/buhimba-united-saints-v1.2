<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position', 
        'email',
        'phone',
        'bio',
        'photo',
        'hire_date',
        'is_active',
        // Keep original fields for backwards compatibility
        'first_name',
        'last_name',
        'role',
        'biography',
        'nationality',
        'qualifications',
        'social_media',
        'joined_date',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'hire_date' => 'date',
        'joined_date' => 'date',
        'qualifications' => 'array',
        'social_media' => 'array',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function getNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        return asset('images/default-staff.png');
    }
}
