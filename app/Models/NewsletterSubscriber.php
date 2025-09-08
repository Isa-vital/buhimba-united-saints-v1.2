<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsletterSubscriber extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'name',
        'is_active',
        'subscribed_at',
        'unsubscribed_at',
        'verification_token',
        'verified_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
        'verified_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeVerified($query)
    {
        return $query->whereNotNull('verified_at');
    }

    public function isVerified()
    {
        return !is_null($this->verified_at);
    }

    public function generateVerificationToken()
    {
        $this->verification_token = bin2hex(random_bytes(32));
        $this->save();
        
        return $this->verification_token;
    }

    public function verify()
    {
        $this->verified_at = now();
        $this->verification_token = null;
        $this->is_active = true;
        $this->save();
    }

    public function unsubscribe()
    {
        $this->is_active = false;
        $this->unsubscribed_at = now();
        $this->save();
    }
}
