<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Server;
use App\Services\Votes\VoteCooldownService;
use App\Services\Votes\VoteGatewayService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VoteActionController extends Controller
{
    public function __construct(
        protected VoteCooldownService $voteCooldownService = new VoteCooldownService(),
        protected VoteGatewayService $voteGatewayService = new VoteGatewayService()
    ) {
    }

    public function store(Request $request, string $slug): RedirectResponse
    {
        $server = Server::query()->where('slug', $slug)->firstOrFail();
        $user = $request->user();

        if (!$this->voteCooldownService->canVote($user, $server)) {
            return redirect()
                ->back()
                ->with('error', 'You cannot vote yet. Please wait until your cooldown expires.');
        }

        $this->voteGatewayService->recordVote($user, $server);

        return redirect()
            ->back()
            ->with('success', 'Your vote has been recorded successfully.');
    }
}
