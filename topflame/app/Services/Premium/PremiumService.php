<?php

namespace App\Services\Premium;

use App\Models\Server;
use Carbon\CarbonInterface;

class PremiumService
{
    public function requiresReapprovalOnUpdate(Server $server): bool
    {
        if ($server->is_premium && $server->skip_reapproval) {
            return false;
        }

        return true;
    }

    public function isPremiumActive(Server $server, ?CarbonInterface $now = null): bool
    {
        $now ??= now();

        if (!$server->is_premium) {
            return false;
        }

        if ($server->premium_ends_at === null) {
            return true;
        }

        return $server->premium_ends_at->greaterThan($now);
    }
}
