<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    protected $fillable = [
        'opponent',
        'match_date',
        'venue',
        'location',
        'competition',
        'match_type',
        'season',
        'matchday',
        'preview',
        'is_completed',
    ];

    protected $casts = [
        'match_date' => 'datetime',
        'is_completed' => 'boolean',
        'season' => 'integer',
        'matchday' => 'integer',
    ];

    public function scopeUpcoming($query)
    {
        return $query->where('match_date', '>', now());
    }

    public function scopeCompleted($query)
    {
        return $query->where('is_completed', true);
    }

    public function scopeHomeMatches($query)
    {
        return $query->where('venue', 'Home');
    }

    public function getHomeTeamAttribute()
    {
        return $this->venue === 'Home' ? 'Buhimba United Saints FC' : $this->opponent;
    }

    public function getAwayTeamAttribute()
    {
        return $this->venue === 'Away' ? 'Buhimba United Saints FC' : $this->opponent;
    }
}
