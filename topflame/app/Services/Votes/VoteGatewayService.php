<?php

namespace App\Services\Votes;

use App\Models\Server;
use App\Models\ServerVote;
use App\Models\User;

class VoteGatewayService
{
    public function recordVote(User $user, Server $server, string $source = 'topflame'): ServerVote
    {
        $votedAt = now();

        return ServerVote::query()->create([
            'server_id' => $server->id,
            'user_id' => $user->id,
            'voted_at' => $votedAt,
            'next_vote_at' => $votedAt->copy()->addHours(12),
            'vote_source' => $source,
        ]);
    }
}
