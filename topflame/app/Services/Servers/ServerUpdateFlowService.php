<?php

namespace App\Services\Servers;

use App\Models\Server;
use App\Services\Premium\PremiumService;

class ServerUpdateFlowService
{
    public function __construct(
        protected PremiumService $premiumService = new PremiumService()
    ) {
    }

    public function nextStatusAfterUpdate(Server $server): string
    {
        if ($this->premiumService->requiresReapprovalOnUpdate($server)) {
            return 'pending';
        }

        return $server->status ?: 'approved';
    }
}
