<?php

namespace App\Services\Votes;

use App\Models\Server;
use App\Models\ServerVote;
use App\Models\User;
use Carbon\CarbonInterface;

class VoteCooldownService
{
    public function canVote(User $user, Server $server, ?CarbonInterface $now = null): bool
    {
        $now ??= now();

        $lastVote = ServerVote::query()
            ->where('user_id', $user->id)
            ->where('server_id', $server->id)
            ->latest('voted_at')
            ->first();

        if (!$lastVote) {
            return true;
        }

        if ($lastVote->next_vote_at === null) {
            return true;
        }

        return $now->greaterThanOrEqualTo($lastVote->next_vote_at);
    }

    public function nextVoteAt(?CarbonInterface $from = null): CarbonInterface
    {
        $from ??= now();

        return $from->copy()->addHours(12);
    }
}
