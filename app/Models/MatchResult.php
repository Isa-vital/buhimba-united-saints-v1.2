<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchResult extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'fixture_id',
        'opponent',
        'match_date',
        'venue',
        'location',
        'competition',
        'match_type',
        'season',
        'matchday',
        'home_score',
        'away_score',
        'is_home',
        'goalscorers',
        'assists',
        'yellow_cards',
        'red_cards',
        'substitutions',
        'match_report',
        'man_of_match',
        'attendance',
        'referee',
    ];

    protected $casts = [
        'match_date' => 'datetime',
        'goalscorers' => 'array',
        'assists' => 'array',
        'yellow_cards' => 'array',
        'red_cards' => 'array',
        'substitutions' => 'array',
        'is_home' => 'boolean',
    ];

    // Relationships
    public function fixture(): BelongsTo
    {
        return $this->belongsTo(Fixture::class);
    }

    // Accessors
    public function getResultAttribute()
    {
        if ($this->is_home) {
            return "{$this->home_score} - {$this->away_score}";
        }
        return "{$this->away_score} - {$this->home_score}";
    }

    public function getOurScoreAttribute()
    {
        return $this->is_home ? $this->home_score : $this->away_score;
    }

    public function getOpponentScoreAttribute()
    {
        return $this->is_home ? $this->away_score : $this->home_score;
    }

    // Accessors for view compatibility
    public function getHomeTeamAttribute()
    {
        return $this->is_home ? 'Buhimba United Saints FC' : $this->opponent;
    }

    public function getAwayTeamAttribute()
    {
        return $this->is_home ? $this->opponent : 'Buhimba United Saints FC';
    }

    public function getHomeGoalsAttribute()
    {
        return $this->home_score;
    }

    public function getAwayGoalsAttribute()
    {
        return $this->away_score;
    }

    // Scopes
    public function scopeLatest($query, $limit = 5)
    {
        return $query->orderBy('match_date', 'desc')->limit($limit);
    }

    public function scopeWins($query)
    {
        return $query->whereRaw('
            (is_home = 1 AND home_score > away_score) OR 
            (is_home = 0 AND away_score > home_score)
        ');
    }

    public function scopeHomeMatches($query)
    {
        return $query->where('is_home', true);
    }

    public function scopeAwayMatches($query)
    {
        return $query->where('is_home', false);
    }
}
