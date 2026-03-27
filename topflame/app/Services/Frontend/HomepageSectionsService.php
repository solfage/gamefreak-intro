<?php

namespace App\Services\Frontend;

use App\Models\Server;

class HomepageSectionsService
{
    public function featuredPremium(int $limit = 6)
    {
        return Server::query()
            ->where('status', 'approved')
            ->where('is_premium', true)
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function latestApproved(int $limit = 8)
    {
        return Server::query()
            ->where('status', 'approved')
            ->latest()
            ->limit($limit)
            ->get();
    }
}
