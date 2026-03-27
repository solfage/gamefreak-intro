<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServerVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'server_id',
        'user_id',
        'voted_at',
        'next_vote_at',
        'vote_source',
    ];

    protected $casts = [
        'voted_at' => 'datetime',
        'next_vote_at' => 'datetime',
    ];

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
