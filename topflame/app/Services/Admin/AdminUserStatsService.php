<?php

namespace App\Services\Admin;

use App\Models\Notification;
use App\Models\Server;
use App\Models\User;

class AdminUserStatsService
{
    public function summary(): array
    {
        return [
            'users_total' => User::query()->count(),
            'server_owners_total' => User::query()->whereHas('servers')->count(),
            'users_with_notifications' => Notification::query()->distinct('user_id')->count('user_id'),
            'users_with_servers' => Server::query()->distinct('owner_user_id')->count('owner_user_id'),
        ];
    }
}
