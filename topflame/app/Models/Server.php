<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_user_id',
        'name',
        'slug',
        'hostname',
        'login_port',
        'game_port',
        'chronicle',
        'rate_exp',
        'rate_sp',
        'rate_adena',
        'website_url',
        'discord_url',
        'logo_path',
        'banner_path',
        'description',
        'status',
        'is_premium',
        'premium_type',
        'premium_starts_at',
        'premium_ends_at',
        'skip_reapproval',
    ];

    protected $casts = [
        'is_premium' => 'boolean',
        'skip_reapproval' => 'boolean',
        'premium_starts_at' => 'datetime',
        'premium_ends_at' => 'datetime',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

    public function getFormattedRateExpAttribute(): string
    {
        return 'x' . $this->rate_exp;
    }

    public function getFormattedRateSpAttribute(): string
    {
        return 'x' . $this->rate_sp;
    }

    public function getFormattedRateAdenaAttribute(): string
    {
        return 'x' . $this->rate_adena;
    }
}
