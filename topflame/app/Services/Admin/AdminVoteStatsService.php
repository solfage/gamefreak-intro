<?php

namespace App\Services\Admin;

use App\Models\ServerVote;

class AdminVoteStatsService
{
    public function summary(): array
    {
        return [
            'votes_total' => ServerVote::query()->count(),
            'votes_today' => ServerVote::query()->whereDate('voted_at', now()->toDateString())->count(),
            'cooldowns_active' => ServerVote::query()->where('next_vote_at', '>', now())->count(),
        ];
    }
}
